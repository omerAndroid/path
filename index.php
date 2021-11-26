<?php
$myObj = new stdClass();
$myObj->name = "Omer Baraja";
$myObj->age = 30;
$myObj->city = "New York";

$myJSON = json_encode($myObj);

echo $myJSON;
?>