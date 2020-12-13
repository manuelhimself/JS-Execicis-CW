<?php

$conn = new mysqli("localhost", "root", "", "parking");
$stmt = $conn->prepare("SELECT * FROM cotxe ORDER BY matricula");
$stmt->execute();
$result = $stmt->get_result();

while($row = mysqli_fetch_array($result)) {
	echo "<option value='". $row['matricula'] ."'>" .$row['marca'] ."</option>";
}

?>