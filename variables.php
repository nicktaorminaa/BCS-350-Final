<?php
// variables.php - Common Website Variables
// Written by:  Nicholas Taormina, December 2022

// Set Default PHP Options
	date_default_timezone_set('America/New_York');
	error_reporting(E_ALL); 
	
// Variables
	$p 					= 'home';							// Page to include for content
	$pgm				= 'website.php';					// Landing Page
	$width 				= '1024';							// Page width
	$pixdir 			= 'images';							// Image directory
	$domain				= 'domain.com';						// Domain Name
	$sitename			= 'Farmingdale State College Baseball Team';						// Website Name	
	$webmaster 			= 'YourName';						// Webmaster Name
	$email				= "webmaster@$domain";				// Webmaster Email
	$desc_short			= 'Farmingdale State College Baseball Team';				// Short Website Description
	$year				= date('Y');						// Current Year	
	$logo				= 'logo.png';						// Logo image filename 

// MySQL Database
	$myserver			= 'localhost';
	$myuserid			= 'root';
	$mypassword			= NULL;
	$mydatabase			= 'bcs350';

// Navbar Variables
	$pages				= array('home'	=> 'Home', 
								'page2' => 'Players', 
								'page3'	=> 'Schedule',
								'page5' => 'Location',
								'logon'	=> 'logon');
	$restricted 		= array(NULL);
	$role_reqrd			= array(NULL);
	$role_name			= array(NULL);
	$nb_text_color		= 'white';
	$nb_text_color2		= 'yellow';
	$nav_style			= 'color:white;   
						   background-color:black;     
						   font-size:100%; 
						   font-weight:bold; 
						   font-family:Arial,Helvetica; 
						   border:1px solid black;';

// Page Styles	
	$pg_color			= 'black';													// Default page text color
	$pg_bgcolor			= 'white';												// Default page text background color
	$page_style			= "color:$pg_color;
						   background-color:$pg_bgcolor; 
						   font-size:100%; 
						   font-family:Arial,Helvetica; 
						   border:1px solid black;";

// Header
	$hdr_style			= "color:black;   
						   background-color:darkgreen;    
						   font-size:200%; font-style:italic; 
						   font-weight:bold; 
						   font-family:Arial,Helvetica;";
	$hdr_style2			= "color:black;  
						   background-color:darkgreen;    
						   font-size:100%; 
						   font-weight:bold; 
						   font-family:Arial,Helvetica;";
	$hdr_style3			= "color:black;  
						   background-color:yellow;    
						   font-size:75%;  
						   font-weight:bold; 
						   font-family:Arial,Helvetica;";	

// Footer	
	$footer				= "&copy; $year - $desc_short";								// Footer Message	
	$ftr_color			= 'black';													// Footer Text Color
	$ftr_bgcolor		= 'darkgreen';													// Footer Backbround Color
	$ftr_style			= "color:$ftr_color; 
						   background-color:$ftr_bgcolor; 
						   font-size:75%;  
						   font-weight:bold; 
						   font-family:Arial,Helvetica; 
						   border:1px solid black;";
?>					
