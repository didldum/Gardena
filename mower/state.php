<?php

include("../header.inc.php");
                 
$mower = $gardena -> getFirstDeviceOfCategory($gardena::CATEGORY_MOWER);
$rs = ($gardena -> getMowerState($mower));
$err = ($gardena -> getMowerError($mower));

 $json = (object)[];
 $json->state = $rs;
 $json->error = $err;
echo json_encode($json);

?>
