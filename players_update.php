<?php
// players_update.php - Update Players
// Written by:  Nicholas Taormina, December 2022

// Verify that program was called from Landing Page and LOGON
	require('landing.php');


// Variables
	$msg		= NULL; 
	$pgm2		= "$pgm?p=players_update"; 
	$pgm3		= "$pgm?p=page2";
	$bold		= "style='font-weight:bold;'";
  
  

// Input
	if (isset($_GET['n']))		$Number = $_GET['n'];		else $Number = NULL;
	if (isset($_GET['l']))		$LastName = $_GET['l'];		else $LastName = NULL;
	if (isset($_POST['rowid']))		$rowid 		= $_POST['rowid'];		else $rowid 	= NULL;
	if (isset($_POST['Firstname']))	$FirstName	= $_POST['Firstname'];	else $FirstName = NULL;	
	if (isset($_POST['Lastname']))	$LastName	= $_POST['Lastname'];	else $LastName = NULL;
	if (isset($_POST['Number']))	$Number 	= $_POST['Number']; 	
	if (isset($_POST['Class']))		$Class		= $_POST['Class'];	else $Class = NULL;
	if (isset($_POST['Position']))	$Position 	= $_POST['Position'];	else $Position = NULL;

 
	
// Input Verification
	if (isset($_POST['submit'])) {
		if ($Number == NULL)		$msg .= 'Number is missing<br>';
		if ($FirstName == NULL)		$msg .= 'Name is missing<br>';
		if ($LastName == NULL)		$msg .= 'Name is missing<br>';
		if ($Class == NULL)			$msg .= 'Class is missing<br>';
		if ($Position == NULL)		$msg .= 'Position is missing<br>';
	
		
	
// Update Table
		$query = "Update players SET 
				  Number = '$Number',
				  Class = '$Class',
				  Position ='$Position'
				  WHERE Lastname = '$LastName'";
		$result = mysqli_query($mysqli, $query);
		if (!$result) $msg = "Query Error [$query]: " . mysqli_error($mysqli); 
		else $msg = "Player Updated"; 
		}
	else {
		$query = "SELECT Number, FirstName, LastName, Class, Position FROM players WHERE Number = '$Number'";
		$result = mysqli_query($mysqli, $query);
		if (!$result) $msg = "Query Error [$query]: " . mysqli_error($mysqli);
		else list($Number,$FirstName, $LastName, $Class, $Position) = mysqli_fetch_row($result); 
		$msg = "Update Player and Press Submit"; 
		}

	
	echo "<p>PLAYERS
		  <p><form action='$pgm2' method='post'>
		  <table rules='all' frame='border' cellpadding='5'>
		  <tr><td>Number</td><td><input type='text' name='Number' value='$Number' size='80'</td></tr>
		  <tr><td>First Name</td><td><input type='text' name='Firstname' value='$FirstName' size='80' READONLY></td></tr>
		  <tr><td>Last Name</td><td><input type='text' name='Lastname' value='$LastName' size='80' READONLY></td></tr>
		  <tr><td>Class</td><td><input type='text' name='Class' value='$Class' size='80'></td></tr>
		  <tr><td>Position</td><td><input type='text' name='Position' value='$Position' size='80'></td></tr>
		  </table>
		  <p><table><tr><td><input type='submit' name='submit' value='Submit'></td></tr></table>
		  </form>
		  <p><table><tr><td>Message: $msg</td></tr></table>
		  <p><a href='$pgm3'><button>Return to Players Table</button></a><p>";
		 
?>
