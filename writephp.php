<html>
<body>
<h4>Tizag Art Supply Order Form</h4>
<!--Html form-->
<form action="" method="post">
<select name="item">
<option value = "">Select product</option>
<option value = "Paint">Paint</option>
<option value = "Brushes">Brushes</option>
<option value = "Erasers">Erasers</option>
</select>
Quantity: <input name="quantity" type="text" />
<input type="submit" name = "submit" value = "AFFICHE" />
</form>

<?php
//Php display form data
if(isset($_POST['submit'])){
$quantity = $_POST['quantity'];
$item = $_POST['item'];

echo "You ordered ". $quantity . " " . $item . ".<br />";
echo "Thank you for ordering from Tizag Art Supplies!";
}else{
  echo "I am waiting for input data";
}

?>

</body>
</html>
