<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'bands';


$link = mysqli_connect($host, $user, $pass);
	if (!$link) {
	    die('Could not connect: ' . mysql_error());
	}
mysql_select_db($db);
// mysql_close($link);

?>