<?php

$myObj = new \stdClass();
$myObj->name = 'Adoh Kono';
$myJSON = json_encode($myObj->name);
echo $myJSON;