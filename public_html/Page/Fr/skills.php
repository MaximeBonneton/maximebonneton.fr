<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="../../Style/mainStyle.css"/>
        <link rel="stylesheet" href="../../Style/navStyle.css"/>
        <link rel="stylesheet" href="../../Style/skillsStyle.css"/>
        <link rel="stylesheet" href="../../Style/Font/Awesome/css/all.css"/>
        <title>My Site Web</title>
    </head>
    
    <body>
        <div id="bloc_page">
            <?php include('nav.php'); ?>  <!-- link to the hearder html code-->
            <section id="skills">
                <div id="lang">
                    <a href="../Fr/skills.php"><strong>FR</strong></a> |
                    <a href="../En/skills.php">EN</a>
                </div>
                <article id="dev">
                    <h2>Langages de programmation</h2>
                    <div class="dev_skills_list">
                        <div class="dev_skill">
                            <i class="fa-solid fa-c"></i>
                            <span>C, C++</span>
                            <p>60%</p>
                            <div class="bar">
                                <div class="progress c"></div>
                            </div>
                            <ul>
                                <li>Cours approfondi en école d'ingénieur</li>
                                <li>Projet de fin d'étude</li>
                            </ul>
                        </div>
                        <div class="dev_skill">
                            <i class="fa-brands fa-windows"></i>
                            <span>C#, .NET</span>
                            <p>20%</p>
                            <div class="bar">
                                <div class="progress net"></div>
                            </div>
                            <ul>
                                <li>Les bases en école d'ingénieur</li>
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
                                <li>Les bases en école d'ingénieur</li>
                                <li>Complément de cours en autodidacte</li>
                                <li>Création du site Web</li>
                            </ul>
                        </div>
                        <div class="dev_skill">
                            <i class="fa-brands fa-js-square"></i>
                            <span>JavaScript</span>
                            <p>20%</p>
                            <div class="bar">
                                <div class="progress java"></div>
                            </div>
                            <ul>
                                <li>Les bases en autodidacte</li>
                                <li>Création du site Web</li>
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
                                <li>Les bases en autodidacte</li>
                                <li>Créaton du site Web</li>
                            </ul>
                        </div>
                        <div class="dev_skill">
                            <i class="fa-solid fa-memory"></i>
                            <span>ASSEMBLEUR X86</span>
                            <p>20%</p>
                            <div class="bar">
                                <div class="progress assembleur"></div>
                            </div>
                            <ul>
                                <li>Les bases en école d'ingénieur</li>
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
                                <li>Les bases en école d'ingénieur</li>
                            </ul>
                        </div>
                    </div>
                </article>
                <article id="tech">
                    <h2>Compétences techniques</h2>
                    <div>
                        <h3>Infrastructure IP</h3>
                        <p>
                            Mon école d'ingénieur m'a apporté de solides bases techniques concernant
                            les <span class="smallText">réseaux</span> et les <span class="smallText">télécommunications</span>. J'ai pu développer et mettre en pratique
                            ces connaissances au travers de ma mission d'ingénieur d'affaires.
                        </p>
                    </div>
                    <div>
                        <h3>Sûreté & Securité physique</h3>
                        <p>
                            Mon activité en tant qu'ingénieur d'affaires m'a amené à me spécialiser
                            dans les systèmes de sûreté et sécurité physique. J'ai appris pendant
                            plusieurs années à architecturer des systèmes de <span class="smallText">contrôle d'accès</span>, de 
                            <span class="smallText">détection d'intrusion</span> et de <span class="smallText">vidéosurveillance</span>.
                        </p>
                    </div>
                    <div>
                        <h3>Cybersécurité</h3>
                        <p>
                            J'ai commencé mon initiation à la cybersécurité en étudiant la <span class="smallText">cryptographie</span>
                            en fin d'école d'ingénieur puis en m'intéressant de près à ce sujet
                            lors de mon activité d'ingénieur d'affaires. Mon parcours professionnel m'a donné 
                            l'occasion de piloter un projet de mise en conformité à la <span class="smallText">LPM
                            (Loi de Programmation Militaire)</span> dans une grande entreprise française.
                            
                            Aujourd'hui, je me forme continuellement au <span class="smallText">Ethical Hacking</span> et à la cybersécurité 
                            grâce aux sites TryHackMe et RootMe.
                        </p>
                    </div>
                    <div>
                        <h3>Systèmes embarqués</h3>
                        <p>
                            Je suis issu d'une formation d'ingénieur spécialisée dans les systèmes embarqués.
                            Mon projet de fin d'études consistait à prototyper un <span class="smallText">bracelet d'authentification </span>
                            sur une Raspberry PI.
                        </p>
                    </div>
                </article>
                <article id="commerce">
                    <h2>Commerce</h2>
                    <p>
                        Dans le métier d'ingénieur d'affaires, il y aussi... les affaires ! 
                        <br> Côté commercial, mes missions étaient donc diverses et variées :
                    </p>
                    <ul>
                        <li>Prospection</li>
                        <li>Stratégie commerciale</li>
                        <li>Négociation</li>
                        <li>Relations clients</li>
                    </ul>
                </article>
                <article id="management">
                    <h2>Management</h2>
                    <p>
                        Obtenir des projets c'est bien. Les mener à bien c'est mieux !
                    </p>
                    <ul>
                        <li>Gestion de projets</li>
                        <li>Gestion des équipes techniques</li>
                        <li>Veille de la qualité et la sécurité</li>
                        <li>Gestion des contrats</li>
                    </ul>
                </article>
            </section>
        </div>
    </body>
</html>