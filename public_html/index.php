<?php
// Select the good language
if (empty($_GET['lang'])){
   $LANG = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
}
else if ($_GET['lang']=="fr") {
   $LANG = "fr";
}
else if ($_GET['lang']=="en") {
   $LANG = "en";
}

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
// Display the layout
require("../templates/layout.php");
   
