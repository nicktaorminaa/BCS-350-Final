 <?php
// page2.php - Page 2
// Written by:  Nicholas Taormina, December 2022

// Verify that program was called from Landing Page and LOGON
	require('landing.php');

//Variables
$bold				= "style='font-weight:bold;'";
	
// Create a Query
	$query = "SELECT Number, FirstName, LastName, Class, Position FROM players";
	
// Execute the Query
	$result = mysqli_query($mysqli, $query);
	if (!$result) echo "QUERY [$query]: " . mysqli_error($mysqli);

// Process Query Results
	echo "<!DOCTYPE HTML><html><body><center>
		  <div $bold>2022 Farmingdale State College Baseball Roster</div>\n";

echo "<p><table border='frame' rules='all' cellborder='5' cellpadding='5' width= 900>
		  <tr><td $bold>Number</td>
			  <td $bold>Name</td>
			  <td $bold>Class</td>
			  <td $bold>Position</td>";
 if ($srole == 'Webmaster')
	echo		  "<td $bold>UPDATE</td>";
	while(list($Number, $FirstName, $LastName, $Class, $Position) = mysqli_fetch_row($result)) {
		echo "<tr><td>$Number</td>
				  <td>$FirstName $LastName</td>
				  <td>$Class</td>
				  <td>$Position</td>";
		   if ($srole == 'Webmaster') 
	   echo "<td><a href='$pgm?p=players_update&n=$Number'><button>UPDATE</button></a></td></tr>";		  
		}

	
// End of Program
	echo "</table>
		  </body></html>";
	mysqli_close($mysqli);
	
?>


