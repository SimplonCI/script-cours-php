<html>
<head>
<title>YOUR ACCOUNT</title>
</head>
<body>
  <a href = "logout.php">Logout</a>
  <br>
  <?php
  session_start();
  include 'config.php';
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  if(isset($_SESSION['name'])){
  $name = $_SESSION['name'];
  echo "Salut : ".$name;
  }else{
    echo '<script language="Javascript">';
     echo 'document.location.replace("./login.php")'; // -->
     echo ' </script>';
  }
  ?>
</body>
</html>
