<?php
$city=intVal($_REQUEST['city']);

$file = file_get_contents("JSon-ex26.json");
$workers = json_decode($file, true);

foreach($workers as $worker){

}
if($op == "add"){
    echo $num1 + $num2;
}elseif($op == "sub"){
    echo $num1 - $num2;
}elseif($op == "mult"){
    echo $num1 * $num2;
}elseif($op == "div"){
    echo $num1 / $num2;
}

?>