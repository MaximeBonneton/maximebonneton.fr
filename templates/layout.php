<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="css/mainStyle.css"/>
        <link rel="stylesheet" href="css/navStyle.css"/>
        <link rel="stylesheet" href="css/Font/Awesome/css/all.css"/>
        <title><?= $title; ?></title>
    </head>
    
    <body>
        <div id="bloc_page">
            <?php include('nav.php'); ?> 
            <?= $content; ?>
        </div>
    </body>
</html>