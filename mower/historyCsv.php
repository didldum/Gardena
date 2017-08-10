<?php

include("../header.inc.php");
                 
$mower = $gardena -> getFirstDeviceOfCategory($gardena::CATEGORY_MOWER);
$rs = ($gardena -> getDeviceStatusReportCsv($mower));
header("Content-type: text/plain");

echo $rs;
?>
