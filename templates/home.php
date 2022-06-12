<?php $title = "Maxime Bonneton"; ?>

<?php ob_start(); ?>
<section id="home">
    <div id="lang">
        <?php echo $lang["home"]["lang"] ?>
    </div>
    <div class="img_bckgrnd">
        <div class="deco"></div>
    </div>
    <article class="home_txt">
        <h1><?php echo $lang["home"]["title1"] ?></h1>
        <p>
            <?php echo $lang["home"]["text1"] ?>
        </p>
        <p>
            <?php echo $lang["home"]["text2"] ?>
        </p>
        <p>
            <?php echo $lang["home"]["text2"] ?>
        </p>
    </article>
</section>
<?php $content = ob_get_clean(); ?>

<?php require("layout.php") ?>