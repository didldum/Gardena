<?php
error_reporting(E_ALL);


include("data.inc.php");
include("functions.inc.php");
include("gardena.class.inc.php");

if (($apikey && !isset($_GET["apikey"]) || $_GET["apikey"] != $apikey) && php_sapi_name() != 'cli') {
	header("HTTP/1.0 403 Forbidden");
	die();
}


$gardena = new gardena($user, $pw);
             
?>
