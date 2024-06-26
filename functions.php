<?php
// functions.php - String Handling Functions
// Written by:  Nicholas Taormina, December 2022

// cleanse_input - sanitize input and reformat 
	function cleanse_input($phrase, $format) {
		$phrase = filter_var($phrase, FILTER_SANITIZE_STRING);
		$format = trim($format);
		$format_length = strlen($format);
	
		for ($i=0; $i<$format_length; $i++) {
			$letter = substr($format, $i, 1);
		
			switch($letter) {
				case "a":	$phrase = preg_replace("/[^a-zA-Z ]+/", "", $phrase); break;// Remove any non-alphabetic characters
				case "e":	$phrase = ltrim($phrase);		break;						// Left Trim
				case "f":	$phrase = ucfirst($phrase);		break;						// Capitolize First Word
				case "i":	$phrase = preg_replace('/\s+/', ' ', $phrase);	break;		// Internal Trim
				case "l":	$phrase = strtolower($phrase);	break;						// Lower Case
				case "n":	$phrase = preg_replace("/[^0-9.]+/", "", $phrase); break;	// Remove any non-numeric characters
				case "r":	$phrase = rtrim($phrase);		break;						// Right Trim
				case "s":	$phrase = strip_tags($phrase);	break;						// Remove HTML
				case "t":	$phrase = trim($phrase);		break;						// Trim
				case "u":	$phrase = strtoupper($phrase);	break;						// Upper Case
				case "w":	$phrase = ucwords($phrase);		break;						// Capitolize Words
				default:
				}
			}
			
		return($phrase);
		}
		
// Error Message Functions
	function errmsg($msg, $emsg) {
		if ($msg == NULL)
			$msg = $emsg;
			else $msg = $msg . '<br>' . $emsg;
		return($msg);
		}
?>