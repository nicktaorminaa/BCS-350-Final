<?PHP
// logoff.php - Website Logoff
// Written by:  Nicholas Taormina, December 2022

// Verify that program was called from Landing Page
	require('landing.php');

// Logoff by unsetting session variables  
	if (!$logon) $sname = "Guest";  
	session_unset();
	$logon = FALSE;
 
// LOGOFF SCREEN
  echo "<table width='1014' align='center' cellspacing='5' class='text'>
		<tr><td>&nbsp;</td></tr>
		<tr><td align='center'><b><font size='+2'>$sname Logged Off</font></b></td></tr>
		<tr><td>&nbsp;</td></tr>
		</table>\n";
?>