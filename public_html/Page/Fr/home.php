<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="../../Style/mainStyle.css"/>
        <link rel="stylesheet" href="../../Style/navStyle.css"/>
        <link rel="stylesheet" href="../../Style/devStyle.css"/>
        <link rel="stylesheet" href="../../Style/Font/Awesome/css/all.css"/>
        <title>Mon Site Web</title>
    </head>
    
    <body>
        <div id="bloc_page">
            <?php include('nav.php'); ?>  <!-- link to the hearder html code-->
            <section id="home">
                <div id="lang">
                    <a href="../Fr/home.php"><strong>FR</strong></a> |
                    <a href="../En/home.php">EN</a>
                </div>
                <div class="img_bckgrnd">
                    <div class="deco"></div>
                </div>
                <article class="home_txt">
                    <h1> Bienvenue</h1>
                    <p>
                        Vous voici arrivés sur mon embarcation, je suis Max, je serai votre guide 
                        pour l'exploration des profondeurs du site.
                    </p>
                    <p>
                        En quelques mots <span class="smallText">et lignes de code,</span> vous allez découvrir l'essentiel de mon profil,
                        de mes compétences et de mon projet.
                    </p>
                    <p>
                        N'hésitez pas à naviguer parmi les onglets sur votre gauche. <br> Je vous souhaite une agréable visite.
                    </p>
                </article>
            </section>
        </div>
    </body>
</html>