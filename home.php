<?php
// home.php - Home Page
// Written by:  Nicholas Taormina, December 2022

// Verify that program was called from xx.php
	require('landing.php');

$bold				= "style='font-weight:bold;'";

// Output Page  
	echo "<center>
		  <p><img src='$pixdir/rams.png'>
		  <p $bold>Welcome to the Farmingdale State College Baseball Team Website
		  <br><br>
		  <tr><td>
			<table align='center'>
			<td align='center'>
				2350 NY-110<br>
				Farmingdale, NY 117135<br>
				(934)420-2000
			</table>
			</td></tr>
		  </center>";
?>