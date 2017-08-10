<?php

include("../header.inc.php");
                 
$mower = $gardena -> getFirstDeviceOfCategory($gardena::CATEGORY_MOWER);
$rs = ($gardena -> getMowerState($mower));
$err = ($gardena -> getMowerError($mower));

header("Content-type: text/plain");
echo date("c")."\t".$rs."\t".$err."\n";
?>
