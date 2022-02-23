<?php
	$dbConn = new mysqli('localhost', 'kyleb', 'kkbess9', 'gregsgames');

	if (!$dbConn){
		die('Could not connect: ' . mysql_error());
	}
?>