<?php
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "parking");
$stmt = $conn->prepare("SELECT * FROM aparcament");
if(isset($_REQUEST['matricula'])){
	$stmt = $conn->prepare("SELECT * FROM aparcament WHERE idCotxe=".$_REQUEST['matricula']);
}
$stmt->execute();
$result = $stmt->get_result();
$outp = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($outp);
?>