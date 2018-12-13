
<html>
<head>
<title>UPLOAD TO TABLE</title>
</head>
<body>

  <p>UPLOAD IMAGE TO TABLE</p>
  <form action="" method="post" accept="image/*"  enctype="multipart/form-data">
      IMAGE NAME : <input type = "text" name = "name"><BR>
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload"><BR>
    <input type="submit" value="Upload Image" name="upload">
</form>

  <?php
  include 'config.php';
  if(isset($_POST['upload'])){
    $name = $_POST['name'];

    if(!isset($_FILES['fileToUpload'])){
        echo "<center>";
        echo "<font color = 'red'>";
        echo "Insert a picture";
        echo "</font>";
        echo "</center>";
      }else{
      //------- convert image to base64_encode------------------
      $image_path = $_FILES["fileToUpload"]["tmp_name"]; //this will be the physical path of your image
      if($image_path!=""){
      $img_binary = fread(fopen($image_path, "r"), filesize($image_path));
      $picture = base64_encode($img_binary);
      mysqli_query($conn, "INSERT INTO imagetable (id,name,image,datepost) VALUES ('','$name','$picture','$datepost')");
      echo "<center>";
      echo "<font color = 'green'>";
      echo "Picture uploaded";
      echo "</font>";
      echo "</center>";

    }
}
}

  mysqli_close($conn);
  ?>

</body>
</html>
