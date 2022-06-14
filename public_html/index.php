<?php
// Select the good language
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
         '/maximebonneton.fr/'      => [$home,$homeStyle],
         '/maximebonneton.fr/index' => [$home,$homeStyle],
         '/maximebonneton.fr/home' => [$home,$homeStyle],
         '/maximebonneton.fr/aboutMe' => [$aboutMe,$aboutMeStyle],
         '/maximebonneton.fr/skills' => [$skills,$skillsStyle],
         '/maximebonneton.fr/project' => [$project,$projectStyle],
         '/maximebonneton.fr/project/vSpread' => [$vSpread,$vSpreadStyle],         
   );

// This is our router.
   function router($routes)
   {
         // Iterate through a given list of routes.
         foreach ($routes as $path => [$content,$stylePage]) {
            if ($path == $_SERVER['REQUEST_URI']) {
               // If the path matches, display its contents and stop the router.
               return [$content,$stylePage];
            }
         }

         // This can only be reached if none of the routes matched the path.
         echo 'Sorry! Page not found';
   }

// Execute the router with our list of routes and we return the content & style
[$content,$stylePage] = router($routes);
// Display the layout
require("../templates/layout.php");
   