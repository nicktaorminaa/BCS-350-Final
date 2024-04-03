<?php
// page3.php - Page 3
// Written by: Nicholas Taormina, December 2022	

// Verify that program was called from Landing Page and LOGON
	require('landing.php');

//Variables
$bold				= "style='font-weight:bold;'";
	
// Create a Query
	$query = "SELECT Month, Date, Opponent, Time, Location FROM schedule";
	
// Execute the Query
	$result = mysqli_query($mysqli, $query);
	if (!$result) echo "QUERY [$query]: " . mysqli_error($mysqli);

// Process Query Results
	echo "<!DOCTYPE HTML><html><body><center>
		  <div $bold>2022 Farmingdale State College Baseball Schedule</div>\n";

echo "<p><table border='frame' rules='all' cellborder='5' cellpadding='5' width= 900>
		  <tr><td $bold>Date</td>
			  <td $bold>Opponent</td>
			  <td $bold>Time</td>
			  <td $bold>Location</td></tr>\n";
	while(list($Month, $Date, $Opponent, $Time, $Location) = mysqli_fetch_row($result)) {
		echo "<tr><td>$Month $Date</td>
				  <td>$Opponent</td>
				  <td>$Time</td>
				  <td>$Location</td>
				  </tr>\n";
		}
// End of Program
	echo "</table>
		  </body></html>";
	mysqli_close($mysqli);
?>