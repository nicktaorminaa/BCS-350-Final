<?php
// bcs350_mysql_connect.php - Logon to MySQl and connect to the BCS350 database
// Written by: Charles Kaplan, May 2015

// Connect to MySQL and the personal Database
	$mysqli = mysqli_connect('localhost', 'root', '', 'bcs350')
		OR die('Connect Error: ' . mysqli_connect_error());
?>   