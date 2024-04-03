<?php
// session.php - Check for Logon and Load Session Variables
// Written by:  Charles Kaplan, December 2017

  session_start();
  
  if (isset($_SESSION['user'])) {
    $logon 	= TRUE;
	$sname 	= $_SESSION['name'];
	$suser 	= $_SESSION['user'];
	$srole 	= $_SESSION['role']; 
	}
	
	else {
	  $logon = FALSE;
	  $sname = $suser = 'Guest';
	  $srole = 'Public';
	  }
?>