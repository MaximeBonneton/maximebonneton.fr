<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="../../css/mainStyle.css"/>
        <link rel="stylesheet" href="../../css/navStyle.css"/>
        <link rel="stylesheet" href="../../css/devStyle.css"/>
        <link rel="stylesheet" href="../../css/Font/Awesome/css/all.css"/>
        <title>My Website</title>
    </head>
    
    <body>
        <div id="bloc_page">
            <?php include('nav.php'); ?>  <!-- link to the hearder html code-->
            <section id="home">
                <div id="lang">
                    <a href="../fr/home.php">FR</a> |
                    <a href="../en/home.php"><strong>EN</strong></a>
                </div>
                <div class="img_bckgrnd">
                    <div class="deco"></div>
                </div>
                <article class="home_txt">
                    <h1> Welcome</h1>
                    <p>
                        Welcome on board, I am Max, I will be your guide
                        during the exploration of the depths of this website.
                    </p>
                    <p>
                        With a few words <span class="smallText">and lines of code,</span> you will discover a lot about me,
                        my skills and my projects.
                    </p>
                    <p>
                        Feel free to navigate through the tabs on your left. <br> I wish you a pleasant visit.
                    </p>
                </article>
            </section>
        </div>
    </body>
</html>