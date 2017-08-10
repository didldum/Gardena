<?php

include("../header.inc.php");

$mower = $gardena -> getFirstDeviceOfCategory($gardena::CATEGORY_MOWER);

$state = ($gardena -> getMowerState($mower));

$rs = false;

// only resume if we have paused - otherwise if mower is parked_autotimer it will leave and return.
if ($state == "parked_park_selected") {
	$rs = ($gardena -> sendCommand($mower, $gardena->CMD_MOWER_START_RESUME_SCHEDULE));
} else if ($state) {
	$rs = true;
}

header("content-type: application/json");
if ($rs === true) {
	$json = (object)[];
	$json->success = true;
	echo json_encode($json);
} else {
	http_response_code(500);
	echo $rs;
	error_log("CMD_MOWER_START_RESUME_SCHEDULE error 500:$rs");
}
?>
