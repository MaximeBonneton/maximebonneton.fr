<?php $homeStyle = "homeStyle.css"?>
<?php ob_start();?>
<section id="home">
    <div class="img_bckgrnd">
        <div class="deco"></div>
    </div>
    <article class="home_txt">
        <h1><?= $lang["home"]["title1"] ?></h1>
        <p>
            <?= $lang["home"]["text1"] ?>
        </p>
        <p>
            <?= $lang["home"]["text2"] ?>
        </p>
        <p>
            <?= $lang["home"]["text2"] ?>
        </p>
    </article>
</section>
<?php $home = ob_get_clean(); ?>

