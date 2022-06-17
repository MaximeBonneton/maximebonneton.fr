<?php session_start(); ?>

<?php // Select the good language

//Do we have a $_GET['lang'] ?
if ($_GET['lang']=="fr") {
   $_SESSION['LANG'] = "fr";
}
else if ($_GET['lang']=="en") {
   $_SESSION['LANG'] = "en";
}
//If we don't let's take the default language
else if(empty($_SESSION['LANG'])){
   $_SESSION['LANG'] = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
}
//If it's different than "fr" let's turn in English
else if($_SESSION['LANG']!='fr'){
   $_SESSION['LANG'] = "en";
}

//So running the good language
switch($_SESSION['LANG']){
 	case "en":
		require('lang/eng.php');	
	break;
	case "fr":
		require('lang/fre.php');		
	break;	
	default: 
		require('lang/eng.php');		
}
?>

<?php
// Changing all the pages
   require('../templates/nav.php');
   require('../templates/home.php');
   require('../templates/aboutMe.php');	
   require('../templates/skills.php');	
   require('../templates/project.php');
   require('../templates/projects/vSpread.php');	
?>

<?php
// First, let's define our list of routes.
// Each path have a couple of $content & $stylePage
//(I don't arrive to return the $stylePage with ob_get_clean)
   $routes = array(
         '/'      => [$home,$homeStyle],
         '/index' => [$home,$homeStyle],
         '/home' => [$home,$homeStyle],
         '/aboutMe' => [$aboutMe,$aboutMeStyle],
         '/skills' => [$skills,$skillsStyle],
         '/project' => [$project,$projectStyle],
         '/project/vSpread' => [$vSpread,$vSpreadStyle],         
   );

// This is our router.
   function router($routes)
   {
         // Iterate through a given list of routes.
         foreach ($routes as $path => [$content,$stylePage]) {
            if ($path == parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH)) {
               // If the path matches, display its contents and stop the router.
               return [$content,$stylePage];
            }
         }
   }

// Execute the router with our list of routes and we return the content & style
[$content,$stylePage] = router($routes);
// Display the layout with the good content & style
require("../templates/layout.php");
   
