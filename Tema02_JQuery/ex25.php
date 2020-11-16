<?php
$num1=$_REQUEST['num1'];
$num2=$_REQUEST['num2'];
$op=$_REQUEST['op'];

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