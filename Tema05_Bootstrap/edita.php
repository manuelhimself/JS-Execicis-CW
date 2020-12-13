<?php
$conn = new mysqli("localhost", "root", "", "parking");
if(isset($_REQUEST["plaza"])){
	$id = $_REQUEST['id'];
 	$plza = mysqli_real_escape_string($conn, $_REQUEST["plaza"]);
 	$query = "UPDATE aparcament SET plaza='".$plza."' WHERE id='".$id."'";
 	if(mysqli_query($conn, $query)){
  		echo 'Informació Actualitzada';
 	}
 	else {
 		echo 'ERROR '.$query;
 	}
}
?>