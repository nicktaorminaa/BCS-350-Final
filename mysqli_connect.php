<?php
// mysqli_connect.php - Logon to MySQL and connect to the database
// Written by: Charles Kaplan, December 2017

	$mysqli = mysqli_connect($myserver, $myuserid, $mypassword, $mydatabase)
			  or die('Could not connect to MySQLI server!' . mysqli_connect_error());
?>   