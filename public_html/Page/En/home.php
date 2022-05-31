<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="../../Style/mainStyle.css"/>
        <link rel="stylesheet" href="../../Style/navStyle.css"/>
        <link rel="stylesheet" href="../../Style/devStyle.css"/>
        <link rel="stylesheet" href="../../Style/Font/Awesome/css/all.css"/>
        <title>My Site Web</title>
    </head>
    
    <body>
        <div id="bloc_page">
            <?php include('nav.php'); ?>  <!-- link to the hearder html code-->
            <section id="home">
                <div id="lang">
                    <a href="../Fr/home.php">FR</a> |
                    <a href="../En/home.php"><strong>EN</strong></a>
                </div>
                <div class="img_bckgrnd">
                    <div class="deco"></div>
                </div>
                <article class="home_txt">
                    <h1> Welcome</h1>
                    <p>
                        You have arrived on my boat, I am Max, I will be your guide
                        for exploring the depths of the site.
                    </p>
                    <p>
                        In a few words <span class="smallText">and lines of code,</span> you will discover the essence of my profile,
                        of my skills and my project.
                    </p>
                    <p>
                        Feel free to navigate through the tabs on your left. <br> I wish you a pleasant visit.
                    </p>
                </article>
            </section>
        </div>
    </body>
</html>