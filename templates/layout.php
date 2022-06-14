<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="/css/mainStyle.css"/>
        <link rel="stylesheet" href="/css/navStyle.css"/>
        <link rel="stylesheet" href="/css/<?= $stylePage ?>"/>
        <link rel="stylesheet" href="/css/Font/Awesome/css/all.css"/>
        <title>Maxime Bonneton</title>
    </head>
    
    <body>
        <div id="bloc_page">
            <div id="lang">
                <a href="?lang=fr"><?=$lang["layout"]["langFR"] ?></a> |
                <a href="?lang=en"><?=$lang["layout"]["langEN"] ?></a>
            </div>
                <?= $header; ?>
                <?= $content; ?>
        </div>
    </body>
</html>