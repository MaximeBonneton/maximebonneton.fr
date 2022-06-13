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
?>

<?php
// First, let's define our list of routes.
// We could put this in a different file and include it in order to separate
// logic and configuration.
   $routes = array(
         '/maximebonneton.fr/'      => $home,
         '/maximebonneton.fr/index' => $home,
         '/maximebonneton.fr/home' => $home,
         '/maximebonneton.fr/aboutMe' => $aboutMe,
         '/maximebonneton.fr/skills' => $skills,
         '/maximebonneton.fr/project' => $project,
   );

// This is our router.
   function router($routes)
   {
         // Iterate through a given list of routes.
         foreach ($routes as $path => $content) {
            if ($path == $_SERVER['REQUEST_URI']) {
               // If the path matches, display its contents and stop the router.
               return $content;
            }
         }

         // This can only be reached if none of the routes matched the path.
         echo 'Sorry! Page not found';
   }

// Execute the router with our list of routes.
$content = router($routes);
// Display the layout
require("../templates/layout.php");
   
   