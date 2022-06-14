<?php $projectStyle = "projectStyle.css"?>
<?php ob_start(); ?>
<section id="project">
    <h2><?=$lang["projects"]["title1"]?></h2>
    <article id="listProject">
        <a class="topic" href="home">
            <img src="/img/logo_exemple.png" alt="logo"/>
            <span class="titleTopic">My Website</span>
            <p></p>
        </a>
        <a class="topic" href="project/vSpread">
            <img src="/img/vSpread.png" alt="logo"/>
            <span class="titleTopic">VSpread</span>
            <p></p>
        </a>
        <a class="topic">
            <span class="titleTopic">HackProgress</span>
            <p><?=$lang["projects"]["coming"]?></p>
        </a>
        <a class="topic">
            <span class="titleTopic">ZombDetector</span>
            <p><?=$lang["projects"]["coming"]?></p>
        </a>
        <a class="topic">
            <span class="titleTopic">WhiteWolf</span>
            <p><?=$lang["projects"]["coming"]?></p>
        </a>
    </article>
</section>
<?php $project = ob_get_clean(); ?>
