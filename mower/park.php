<?php

include("../header.inc.php");

$mower = $gardena -> getFirstDeviceOfCategory($gardena::CATEGORY_MOWER);

$rs = ($gardena -> sendCommand($mower, $gardena->CMD_MOWER_PARK_UNTIL_FURTHER_NOTICE));

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
