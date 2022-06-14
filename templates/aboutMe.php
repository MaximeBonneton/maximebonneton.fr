<?php $aboutMeStyle = "aboutMeStyle.css"?>
<?php ob_start(); ?>
<section id="aboutMe">
    <article class="article_n1">
    <h2> <?=$lang["aboutMe"]["title1"]?> </h2>
        <div>
            <p>
                <?=$lang["aboutMe"]["study"]?>
            </p>
        </div>
        <div><i class="fa-solid fa-graduation-cap"></i></div>
        <div>
            <p>
                <?=$lang["aboutMe"]["spie"]?>
            </p>
        </div>
        <div><i class="fa-solid fa-suitcase"></i></div>
        <div>
            <p>
                <?=$lang["aboutMe"]["improv"]?>
            </p>
        </div>
        <div><i class="fa-solid fa-arrow-trend-up"></i></div>
        <div>
            <p>
                <?=$lang["aboutMe"]["covid"]?>
            </p>
        </div>
        <div><i class="fa-solid fa-virus-covid"></i></i></div>
        <div>
            <p>                        
                <?=$lang["aboutMe"]["orientation"]?>
            </p>
            <ul>
                <?=$lang["aboutMe"]["decisions"]?>
            </ul>
        </div>
        <div><i class="fa-solid fa-signs-post"></i></div>
        <div>
            <p>
                <?=$lang["aboutMe"]["newLife"]?>
            </p>
        </div>
        <div><i class="fa-solid fa-plane-departure"></i></div>
        <div>
            <p>
                <?=$lang["aboutMe"]["today"]?>
            </p>
        </div>

        <div id="currentAim" class="aim">
            <?=$lang["aboutMe"]["pain"]?>
            <i class="fa-solid fa-crosshairs"></i>
        </div>
    </article>
</section>
<?php $aboutMe = ob_get_clean(); ?>