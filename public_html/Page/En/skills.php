<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="../../Style/mainStyle.css"/>
        <link rel="stylesheet" href="../../Style/navStyle.css"/>
        <link rel="stylesheet" href="../../Style/skillsStyle.css"/>
        <link rel="stylesheet" href="../../Style/Font/Awesome/css/all.css"/>
        <title>My Website</title>
    </head>
    
    <body>
        <div id="bloc_page">
            <?php include('nav.php'); ?>  <!-- link to the hearder html code-->
            <section id="skills">
                <div id="lang">
                    <a href="../Fr/skills.php">FR</a> |
                    <a href="../En/skills.php"><strong>EN</strong></a>
                </div>
                <article id="dev">
                    <h2>Programming languages</h2>
                    <div class="dev_skills_list">
                        <div class="dev_skill">
                            <i class="fa-solid fa-c"></i>
                            <span>C, C++</span>
                            <p>60%</p>
                            <div class="bar">
                                <div class="progress c"></div>
                            </div>
                            <ul>
                                <li>Advanced courses in engineering school</li>
                                <li>Graduation project</li>
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
                                <li>Basics in engineering school</li>
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
                                <li>Basics in engineering school</li>
                                <li>Self-taught advanced knowledge </li>
                                <li>Creation of this website</li>
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
                                <li>Self-taught advanced knowledge</li>
                                <li>Creation of this website</li>
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
                                <li>Self-taught basics</li>
                                <li>Creation of this website</li>
                            </ul>
                        </div>
                        <div class="dev_skill">
                            <i class="fa-solid fa-memory"></i>
                            <span>X86 ASSEMBLER</span>
                            <p>20%</p>
                            <div class="bar">
                                <div class="assembly progress"></div>
                            </div>
                            <ul>
                                <li>Basics in engineering school</li>
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
                                <li>Basics in engineering school</li>
                            </ul>
                        </div>
                    </div>
                </article>
                <article id="tech">
                    <h2>Technical skills</h2>
                    <div>
                        <h3>IP infrastructure</h3>
                        <p>
                            My engineering school allowed me to learn solid technical basics concerning
                            <span class="smallText">networks</span> and <span class="smallText">telecommunications</span>.
                            I later developed and applied this knowledge through my mission as a pre-sales engineer.
                        </p>
                    </div>
                    <div>
                        <h3>Safety & Physical Security</h3>
                        <p>
                            As a pre-sales engineer, I specialized in physical safety and security systems.
                            For several years, I designed <span class="smallText">access control</span> architectures,
                            <span class="smallText">intrusion detection </span> infrastructures and
                            <span class="smallText">surveillance</span> systems.
                        </p>
                    </div>
                    <div>
                        <h3>Cybersecurity</h3>
                        <p>
                            I started learning cybersecurity with <span class="smallText"> the cryptography</span>
                            at the end of the engineering school. Then, I focused on this subject
                            while I was a pre-sales engineer. My professional career has given me
                            the opportunity to lead a <span class="smallText">LPM (French Military Programming Law)</span>
                            compliance project for one of the biggest french companies. <br><br>
                            
                            At the moment, I am still training myself at <span class="smallText">Ethical Hacking</span> and cybersecurity
                            thanks to the websites TryHackMe and RootMe.
                        </p>
                    </div>
                    <div>
                        <h3>Embedded systems</h3>
                        <p>
                            I got an engineering background specialized in embedded systems.
                            My graduation project was to prototype an <span class="smallText">authentication wristband</span>
                            on a Raspberry PI.
                        </p>
                    </div>
                </article>
                <article id="commerce">
                    <h2>Business</h2>
                    <p>
                        Being a pre-sales engineer means also... being a business man!
                        <br> My missions were therefore diverse and varied:
                    </p>
                    <ul>
                        <li>Commercial prospection</li>
                        <li>Commercial strategy</li>
                        <li>Negotiation</li>
                        <li>Customer relations</li>
                    </ul>
                </article>
                <article id="management">
                    <h2>Management</h2>
                    <p>
                        Obtaining new projects is good. Carrying them out is better!
                    </p>
                    <ul>
                        <li>Projects management</li>
                        <li>Management of the technical teams</li>
                        <li>Quality and safety monitoring</li>
                        <li>Contracts management</li>
                    </ul>
                </article>
            </section>
        </div>
    </body>
</html>