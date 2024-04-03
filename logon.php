<?PHP
// logon.php - Website Logon
// Written by:  Nicholas Taormina, December 2022

// Verify that program was called from xx.php
	require('landing.php');
  
// Variables  
	$msg = NULL;			// Error Message

// Get Form Input  
	if (isset($_POST['register'])) {
		include('register.php');
		exit;
		}
	if(isset($_POST['logon'])) {
		$userid = trim($_POST['userid']);
		$pword = trim($_POST['password']);
		if ($userid == NULL) 			$msg = "USERID is missing";
		if ($pword == NULL) 			$msg = "PASSWORD is missing";
		if (($userid == NULL) AND ($pword == NULL)) $msg = "USERID & PASSWORD are missing";
		if ($msg == NULL) {
			
// Bypass Verify USERID/PASSWORD against table
			if ($userid == 'bypass') {
				$rowid 		= 1;
				$firstname 	= 'Test';
				$lastname 	=  'User';
				$password	= $pword;
				$role		= 'Member'; 
				}
// Verify USERID/PASSWORD against table
			else {
				$query = "SELECT rowid, firstname, lastname, password, role FROM users WHERE userid='$userid'";
				$result = mysqli_query($mysqli, $query);
				if (!$result) echo "Error accessing Roster Table " . mysqli_error($mysqli);
				if (mysqli_num_rows($result) > 0) {
					list($rowid, $firstname, $lastname, $password, $role) = mysqli_fetch_row($result);
					}
				else $msg = "USERID is invalid";
				}
			if (($msg == NULL) AND ($pword == $password)) {
				$_SESSION['user'] = $rowid;
				$_SESSION['name'] = $name = "$firstname $lastname";
				$_SESSION['role'] = $role; 
				$logon = TRUE;
				$msg = "<font color='green'><b>$name Logon Successful</b></font>"; 
//				$location = 'location: website.php?p=home';
//				header($location);
//				exit; 
				}
			else $msg = "Invalid Password";
			}
		}
  
// Logon Screen
	$td = "width='20%' align='right'";
	$tf = "width='80%' align='left'";
	if ($msg == NULL)  	$msg = "Enter User ID and Password";
		else if ($logon == FALSE) $msg = "<font color='red'>$msg, please try again</font>";  
    echo "<form action='website.php?p=logon' method='post'>\n
		  <table width='1014' align='center' cellspacing='5' class='text'>
		  <tr><td $td>&nbsp;	</td><td $td>&nbsp;</td></tr>
		  <tr><td $td>&nbsp;	</td><td $tf><b>$sitename Logon</b></td></tr>
		  <tr><td $td>&nbsp;	</td><td $td>&nbsp;</td></tr>
		  <tr><td $td>User ID	</td><td $tf><input type='text' name='userid' size='60' maxlength='80' value=''></td></tr>
		  <tr><td $td>Password	</td><td $tf><input type='password' name='password' size='12' maxlength='12' value=''></td></tr>
		  <tr><td $td>&nbsp;	</td><td $tf>&nbsp;</td></tr>
		  <tr><td $td>&nbsp;	</td><td $tf><input type='submit' name='logon'    value='Logon'    style='background-color:lightgreen;font-weight:bold'>
											 <input type='submit' name='register' value='Register' style='background-color:lightblue;font-weight:bold'></td></tr>
		  <tr><td $td>&nbsp;	</td><td $tf>&nbsp;</td></tr>
		  <tr><td $td>Message	</td><td $tf><b>$msg<b></td></tr>\n
		  </table>\n
		  </form>\n";
?>