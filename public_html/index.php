<?php
  
$LANG = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

switch($LANG){
 	case "en":
		require('lang/eng.php');		
	break;
	case "fr":
		require('lang/fre.php');		
	break;	
	default: 
		require('lang/eng.php');		
	}

require("../templates/home.php");