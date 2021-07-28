<?php
// sets error code to none
$err = "none";
// sets error code to slur(tm)
if(($_POST["rig"] == "niggers")) {
	$err = file_get_contents("./err/wtf.html");
	echo $err;
	die;
}
// party pooper
if(($_POST["rig"] == "caw")) {
	$err = file_get_contents("./err/smartass.html");
	echo $err;
	die;
}
if(($_POST["rig"] == "caw!")) {
	$err = file_get_contents("./err/smartass.html");
	echo $err;
	die;
}
// correct! good job
if(($_POST["rig"] == "leaders")) {
	$err = file_get_contents("./err/yes.html");
	echo $err;
	die;
}
// if after all of this, the error code is still "none", something went wrong !!
if($err == "none") {
	$err = file_get_contents("./err/nope.html");
	echo $err;
	die;
}
?>
