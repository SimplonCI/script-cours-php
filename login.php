
<html>
<head>
<title>LOGIN</title>
</head>
<body>

  <p>LOGIN</p>
  <form method = "POST" action = "">
  NAME : <input type = "text" name = "name"><BR>
  PASSWORD : <input type = "password" name = "password"><BR>
  <input type = "submit" name = "LOGIN" value = "LOGIN">
   </form>

  <?php
  include 'config.php';
  if(isset($_POST['LOGIN'])){

    $name = addslashes($_POST ['name']);
    $password = md5($_POST ['password']);
    $query = mysqli_query($conn, "SELECT * FROM user WHERE password='$password' AND name ='$name'");
    $rows = mysqli_num_rows($query);
          if($rows==1){
          $array = $query->fetch_assoc();
          session_start();
          $_SESSION['logged_in']= true;
          $_SESSION['id'] = $array['id'];
          $_SESSION['name'] = $array['name'];
          echo '<script language="Javascript">';
          echo 'document.location.replace("./page.php")'; // -->
          echo ' </script>';
          }else{
          echo "</center>";
          echo "<font color = 'red'>";
  	      echo "Unknown user";
          echo "</font>";
          echo "<br>";
          echo "</center>";
          }

  }
  mysqli_close($conn);
  ?>

</body>
</html>
