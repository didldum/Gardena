<?php

include("../header.inc.php");
                 
$sensor = $gardena -> getFirstDeviceOfCategory($gardena::CATEGORY_SENSOR);
        
echo $gardena -> getPropertyData($sensor, $gardena::ABILITY_SOIL_HUMIDITY, $gardena::PROPERTY_SOIL_HUMIDITY) -> value;

?>