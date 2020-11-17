<?php
$city=intVal($_REQUEST['city']);

$file = file_get_contents("JSon-ex26.json");
$json = json_decode($file, true);

$workers = $josn['$workers'];

$thisCityWk = array();

foreach($workers as $rkey => $worker){

    if($city == "manacor" && $worker['city'] == "MANACOR"){
        array_push($thisCityWk, $worker);
    }elseif($city == "palma" && $worker['city'] == "PALMA"){
        array_push($thisCityWk, $worker);
    }elseif($city == "inca" && $worker['city'] == "INCA"){
        array_push($thisCityWk, $worker);
    }elseif($city == "soller" && $worker['city'] == "SOLLER"){
        array_push($thisCityWk, $worker);
    }

}

foreach($thisCityWk as $worker){
    echo json_encode($worker, JSON_PRETTY_PRINT);
}

?>