<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="/maximebonneton.fr/public_html/css/mainStyle.css"/>
        <link rel="stylesheet" href="/maximebonneton.fr/public_html/css/navStyle.css"/>
        <link rel="stylesheet" href="/maximebonneton.fr/public_html/css/<?= $stylePage ?>"/>
        <link rel="stylesheet" href="/maximebonneton.fr/public_html/css/Font/Awesome/css/all.css"/>
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