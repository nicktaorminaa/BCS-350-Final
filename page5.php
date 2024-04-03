<?php
// page5.php - Page 5
// Written by: Nicholas Taormina, December 2022	

// Verify that program was called from Landing Page
	require('landing.php');

// Output Page  
	echo "
			<tr><td>
			<table align='center'>
			<td align='center'><img src='$pixdir/$logo'><br>
				2350 NY-110<br>
				Farmingdale, NY 117135<br>
			</table>
			</td></tr>

			<tr><td align='center'>
			<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.4140713008946!2d-73.42888748459376!3d40.75291667932755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e82afe99b445e9%3A0x6c53280083cbf6be!2sFarmingdale%20State%20College!5e0!3m2!1sen!2sus!4v1670277086184!5m2!1sen!2sus'
			
			width='750' height='600' frameborder='0' style='border:0' allowfullscreen>
			
			</iframe>
			</td></tr>
		</table>";
?>