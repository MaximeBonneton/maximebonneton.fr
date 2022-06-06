<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="../../css/mainStyle.css"/>
        <link rel="stylesheet" href="../../css/navStyle.css"/>
        <link rel="stylesheet" href="../../css/projectStyle.css"/>
        <link rel="stylesheet" href="../../css/Font/Awesome/css/all.css"/>
        <title>My Website</title>
    </head>
    
    <body>
        <div id="bloc_page">
            <?php include('nav.php'); ?>  <!-- link to the hearder html code-->
            <div id="lang">
                    <a href="../fr/project.php">FR</a> |
                    <a href="../en/project.php"><strong>EN</strong></a>
            </div>
            <section id="project">
                <h2>My projects</h2>
                <article id="listProject">
                    <a class="topic" href="home.php">
                        <span class="titleTopic">MyWebsite</span>
                        <p></p>
                    </a>
                    <a class="topic" href="vSpread.php">
                        <span class="titleTopic">VSpread</span>
                        <p></p>
                    </a>
                    <a class="topic">
                        <span class="titleTopic">HackProgress</span>
                        <p>Coming soon</p>
                    </a>
                    <a class="topic">
                        <span class="titleTopic">ZombDetector</span>
                        <p>Coming soon</p>
                    </a>
                    <a class="topic">
                        <span class="titleTopic">WhiteWolf</span>
                        <p>Coming soon</p>
                    </a>
                </article>
            </section>
        </div>
    </body>
</html>