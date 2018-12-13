<html>
<body>
<h4>PROF</h4><br>
<?php
include 'configprof.php';
include 'menu.php';
//GET DATA
if(isset($_POST['submit'])){
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$sexe = $_POST['sexe'];
$matiere = $_POST['matiere'];
//---- INSERT INTO MYSQL TABLE--------
mysqli_query($conn, "INSERT INTO info (id,nom,prenom,sexe,matiere) VALUES ('','$nom','$prenom','$sexe','$matiere')");
echo "Congratulation now you have an account";
echo "<br>";
mysqli_close($conn);
}else{
  echo "VOUS DEVEZ ENREGISTRER UN PROF";
}

?>
<br><br>

<!--Html form-->
<form action="" method="post">
  NOM: <input name="nom" type="text" />
    PRENOMS: <input name="prenom" type="text" />
<select name="sexe">
<option value = "">VOTRE SEXE</option>
<option value = "MASCULIN">MASCULIN</option>
<option value = "FEMININ">FEMININ</option>
</select>
MATIERE: <input name="matiere" type="text" />
<input type="submit" name = "submit" value = "ENREGISTRER" />
</form>


</body>
</html>
