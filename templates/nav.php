<?php ob_start(); ?>
<hearder>
    <div id="hearder">
        <div id="logo">
            <img src="/img/logo_exemple.png" alt="logo"/>
        </div>
        <div href="javascript:void(0);" class="icon" onclick="myFunction()" >
            <i id="button" class="fa-solid fa-bars"></i>
        </div>
        <nav id="buttonContent">
            <ul>
                <li><a href="/home"><?=$lang["nav"]["home"]?></a></li>        
                <li><a href="/aboutMe"><?=$lang["nav"]["aboutMax"]?></a></li>
                <li><a href="/skills"><?=$lang["nav"]["skills"]?></a></li>
                <li><a href="/project"><?=$lang["nav"]["projects"]?></a></li>           
            </ul>
        </nav>
        <div id=network>
            <a href="https://fr.linkedin.com/in/maxime-bonneton-a42ab3a5" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="https://github.com/MaximeBonneton" target="_blank"><i class="fa-brands fa-github"></i></a>
        </div>
    </div>
    <script src="/js/navButton.js"></script>
</hearder>
<?php $header = ob_get_clean(); ?>
