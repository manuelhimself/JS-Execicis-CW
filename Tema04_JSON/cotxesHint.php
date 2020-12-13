<?php

$conn = new mysqli("localhost", "root", "", "parking");
$stmt = $conn->prepare("SELECT * FROM cotxe ORDER BY matricula");
$stmt->execute();
$result = $stmt->get_result();

$a = array();
while($row = mysqli_fetch_array($result)) {
	array_push($a, $row['marca']);
}

$q = $_REQUEST["q"];
$hint = "";

if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

echo $hint === "" ? "no suggestion" : $hint;
?>