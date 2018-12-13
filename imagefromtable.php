
<html>
<head>
<title>IMAGE FROM TABLE</title>
</head>
<body>

  <?php
  //---------- DISPLAY IMAGES FROM TABLE----------------------
  include 'config.php';

    $query = mysqli_query($conn, "SELECT * FROM imagetable");
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
    $image = $pict['image'];
  ?>
  <tr><td><?php echo $id ;?></td><td><?php echo $name ;?></td><td><?php echo "<img src=data:image/jpg;base64,$image width='50%' height='50%'>";?></td></tr>
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
