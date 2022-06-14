<?php $skillsStyle = "skillsStyle.css"?>
<?php ob_start(); ?>
<section id="skills">
    <article id="dev">
        <h2> <?=$lang["skills"]["title1"]?> </h2>
        <div class="dev_skills_list">
            <div class="dev_skill">
                <i class="fa-solid fa-c"></i>
                <span>C, C++</span>
                <p>60%</p>
                <div class="bar">
                    <div class="progress c"></div>
                </div>
                <ul>
                    <?=$lang["skills"]["listC"]?>
                </ul>
            </div>
            <div class="dev_skill">
                <i class="fa-brands fa-windows"></i>
                <span>C#, .NET</span>
                <p>20%</p>
                <div class="bar">
                    <div class="net progress"></div>
                </div>
                <ul>
                    <?=$lang["skills"]["listNET"]?>
                </ul>
            </div>
            <div class="dev_skill">
                <i class="fa-brands fa-html5"></i>
                <span>HTML, CSS</span>
                <p>70%</p>
                <div class="bar">
                    <div class="progress html"></div>
                </div>
                <ul>
                    <?=$lang["skills"]["listHTML"]?>
                </ul>
            </div>
            <div class="dev_skill">
                <i class="fa-brands fa-js-square"></i>
                <span>JavaScript</span>
                <p>20%</p>
                <div class="bar">
                    <div class="java progress"></div>
                </div>
                <ul>
                    <?=$lang["skills"]["listJS"]?>
                </ul>
            </div>
            <div class="dev_skill">
                <i class="fa-brands fa-php"></i>
                <span>PHP, SQL</span>
                <p>40%</p>
                <div class="bar">
                    <div class="progress php"></div>
                </div>
                <ul>
                    <?=$lang["skills"]["listPHP"]?>
                </ul>
            </div>
            <div class="dev_skill">
                <i class="fa-solid fa-memory"></i>
                <span>ASSEMBLER X86</span>
                <p>20%</p>
                <div class="bar">
                    <div class="progress assembleur"></div>
                </div>
                <ul>
                    <?=$lang["skills"]["listASM"]?>
                </ul>
            </div>
            <div class="dev_skill">
                <i class="fa-solid fa-microchip"></i>
                <span>VHDL, Verilog</span>
                <p>30%</p>
                <div class="bar">
                    <div class="progress VHDL"></div>
                </div>
                <ul>
                    <?=$lang["skills"]["listVHDL"]?>
                </ul>
            </div>
        </div>
    </article>
    <article id="tech">
        <h2> <?=$lang["skills"]["title2"]?> </h2>
        <div>
            <h3> <?=$lang["skills"]["title21"]?> </h3>
            <p>
                <?=$lang["skills"]["text1"]?> 
            </p>
        </div>
        <div>
            <h3> <?=$lang["skills"]["title22"]?> </h3>
            <p>
                <?=$lang["skills"]["text2"]?> 
            </p>
        </div>
        <div>
            <h3> <?=$lang["skills"]["title23"]?> </h3>
            <p>
                <?=$lang["skills"]["text3"]?> 
            </p>
        </div>
        <div>
            <h3> <?=$lang["skills"]["title24"]?> </h3>
            <p>
                <?=$lang["skills"]["text4"]?> 
            </p>
        </div>
    </article>
    <article id="commerce">
        <h2> <?=$lang["skills"]["title3"]?> </h2>
        <?=$lang["skills"]["text5"]?> 
    </article>
    <article id="management">
        <h2> <?=$lang["skills"]["title4"]?> </h2>
        <?=$lang["skills"]["text6"]?> 
    </article>
</section>
<?php $skills = ob_get_clean(); ?>