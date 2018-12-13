
<html>
<head>
<title>IMAGE FROM FOLDER</title>
</head>
<body>

  <?php
  //---------- DISPLAY IMAGE FROM FOLDER----------------------
  include 'config.php';

    $query = mysqli_query($conn, "SELECT * FROM image");
    $rows = mysqli_num_rows($query);
    if($rows!=0){
  ?>
  <p>IMAGE :<?php echo $rows;?> </p>
  <table border="1">
  <tr><td><B>ID</B></td><td><B>NAME</B></td><td><B>IMAGE</B></td></tr>
  <?php
  while($pict = mysqli_fetch_assoc($query)) {
    $id = $pict['id'];
    $name = $pict['name'];
    $imageurl = $pict['url'];
  ?>
  <tr><td><?php echo $id ;?></td><td><?php echo $name ;?></td><td><img src = "<?php echo $imageurl ;?>" width="100" height = "100"></td></tr>
  <?php
  }
  ?>
<table>
  <?php
}else{
  echo "<center>";
  echo "No image";
  echo "</center>";
}

  mysqli_close($conn);


  ?>


</body>
</html>
