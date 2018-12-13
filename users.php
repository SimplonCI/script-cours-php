
<html>
<head>
<title>USER</title>
</head>
<body>

  <?php
  //---------- DISPLAY USER TABLE----------------------
  include 'config.php';

    $query = mysqli_query($conn, "SELECT * FROM user");
    $rows = mysqli_num_rows($query);
    if($rows!=0){
  ?>
  <p>USERS :<?php echo $rows;?> </p>
  <table border="1">
  <tr><td><B>ID</B></td><td><B>NOM</B></td><td><B>PASSWORD</B></td></tr>
  <?php
  while($user = mysqli_fetch_assoc($query)) {
    $id = $user['id'];
    $name = $user['name'];
    $password = $user['password'];
  ?>
  <tr><td><?php echo $id ;?></td><td><?php echo $name ;?></td><td><?php echo $password;?></td></tr>
  <?php
  }
  ?>
<table>
  <?php
}else{
  echo "<center>";
  echo "No data";
  echo "</center>";
}

  mysqli_close($conn);


  ?>


</body>
</html>
