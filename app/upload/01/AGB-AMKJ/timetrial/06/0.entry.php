<?php
	// SPDX-License-Identifier: MIT
	// Ghost upload
	
	require_once(CORE_PATH."/mario_kart.php");
	require_once(CORE_PATH."/database.php");
	
	//if (!isset($_GET["course"]) || strlen($_GET["course"]) != 2 || ((int) $_GET["course"]) > 19) {
	//	http_response_code(404);
	//	return;
	//}
	$course = 6;
	
	entry($course);
?>