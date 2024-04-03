<?php
// navbar.php - Navigation Bar
// Written by: Charles Kaplan, November 2018

// Variables
	$td_width	= floor($width/count($pages)); 

// Output	
	echo "<table width='$width' align='center' style='$nav_style' rules='all' cellpadding='0' cellspacing='0'>\n
		  <tr>\n";
		  
	foreach($pages as $key => $value) {
		if (($key == 'logon') AND ($logon))	$key = $value = 'logoff';		// If Logon Page and Logged On, Make it the Logoff Page
		
// Check conditions to show page as an active link or not		
		$active = TRUE;
		if (!$online)		$active = FALSE;
		if ($p == $key)	$active = FALSE;
		if (array_key_exists($key, $restricted) AND (!$logon)) $active = FALSE;
		if (array_key_exists($key, $role_reqrd) AND ($role != $role_name)) $active = FALSE;
		
// Output
		$pagey = ucwords(strtr($value, array('_' => ' ')));
		if ($active) echo "<td align='center'><a href='$pgm?p=$key'>$pagey</a></td>\n";
		else{
			if ($p == $key) $color = $nb_text_color; else $color = $nb_text_color2;
			echo "<td align='center' width='$td_width' style='color:$color;'>$pagey</td>\n";
			}
		}
		
	echo '</tr></table>';
?>