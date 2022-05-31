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
                                <li>Advanced course in engineering school</li>
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
                                <li>Self-taught supplement</li>
                                <li>Creation of the website</li>
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
                                <li>Self-taught basics</li>
                                <li>Creation of the website</li>
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
                                <li>Creation of the website</li>
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
                            My engineering school provided me with solid technical foundations concerning
                            <span class="smallText">networks</span> and <span class="smallText">telecommunications</span>. I was able to develop and put into practice
                            this knowledge through my mission as a business engineer.
                        </p>
                    </div>
                    <div>
                        <h3>Safety & Physical Security</h3>
                        <p>
                            My activity as a business engineer led me to specialize
                            in physical safety and security systems. I learned during
                            several years of designing systems for <span class="smallText">access control</span>,
                            <span class="smallText">intrusion detection</span> and <span class="smallText">video surveillance</span>.
                        </p>
                    </div>
                    <div>
                        <h3>Cybersecurity</h3>
                        <p>
                            I started my introduction to cybersecurity by studying <span class="smallText">cryptography</span>
                            at the end of engineering school then by taking a close interest in this subject
                            during my activity as a business engineer. My career path has given me
                            the opportunity to lead a <span class="smallText">LPM compliance project
                            (Military Programming Law)</span> in a large French company.
                            
                            Today, I continuously train in <span class="smallText">Ethical Hacking</span> and cybersecurity
                            thanks to the sites TryHackMe and RootMe.
                        </p>
                    </div>
                    <div>
                        <h3>Embedded systems</h3>
                        <p>
                            I come from an engineering background specializing in embedded systems.
                            My graduation project was to prototype a <span class="smallText">authentication wristband</span>
                            on a Raspberry PI.
                        </p>
                    </div>
                </article>
                <article id="commerce">
                    <h2>Trade</h2>
                    <p>
                        In the profession of business engineer, there is also... business!
                        <br> On the commercial side, my missions were therefore diverse and varied:
                    </p>
                    <ul>
                        <li>Prospecting</li>
                        <li>Commercial strategy</li>
                        <li>Negotiation</li>
                        <li>Customer relations</li>
                    </ul>
                        </article>
                <article id="management">
                    <h2>Management</h2>
                    <p>
                        Getting projects is good. Carrying them out is better!
                    </p>
                    <ul>
                        <li>Project management</li>
                        <li>Technical team management</li>
                        <li>Quality and safety monitoring</li>
                        <li>Contract Management</li>
                    </ul>
                </article>
            </section>
        </div>
    </body>
</html>