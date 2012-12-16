<?php
// Check that required include files exists
if (!file_exists("smarty/smarty-config.php")) exit("smarty/smarty-config.php is missing.");
if (!file_exists("config.php")) exit("config.php is missing.");
if (!file_exists("lib/handbrake-functions.php")) exit("lib/handbrake-functions.php is missing.");

// Load required php files
require_once("smarty/smarty-config.php");
require_once("config.php");
require_once("lib/handbrake-functions.php");

// Check that Handbrake progress files exists
if (!file_exists($info_file) or !file_exists($progress_file)) {
	$smarty->display('no_encode.tpl');
}
else {
	$smarty->assign('video_name', video_name($info_file));
	$smarty->assign('video_duration', video_duration($info_file));
	$smarty->assign('progress_percentage', encode_progress($progress_file));
	$smarty->assign('progress_avg_fps', encode_fps($progress_file));
	$smarty->assign('progress_eta', encode_eta($progress_file));
	$smarty->assign('handbrake_version', handbrake_version($info_file));

	$smarty->display('index.tpl');
}
?>
