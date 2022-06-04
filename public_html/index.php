<?php
  
   $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
  
   If($lang!="fr")
   {
        $lang= "en";
   }

   // Redirect browser 
   header("Location: pages/" . $lang . "/home.php");  
  
   exit;
  
?>