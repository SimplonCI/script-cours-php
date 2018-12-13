<?php
include 'configprof.php';
$query = mysqli_query($conn, "SELECT * FROM info WHERE id = '2'");
$rows = mysqli_num_rows($query);

while($prof = mysqli_fetch_assoc($query)) {
  $id = $prof['id'];
  $nom = $prof['nom'];
  $prenom = $prof['prenom'];
  $sexe = $prof['sexe'];
  $matiere = $prof['matiere'];
echo $id."-".$nom." ".$prenom."-".$sexe."-".$matiere."<Br>";

}


mysqli_close($conn);
?>
