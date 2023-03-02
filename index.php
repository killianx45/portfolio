<?php
session_start();
include 'BackOffice/includes/init.inc.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio JEUFFROY Killian</title>
    <link rel="stylesheet" href="FrontOffice/assets/scss/style.css">
</head>
<body>
    <div id="backgroundJS">
        <header>
            <nav class="navbarMenu">
                <ul class="menuListing">
                    <li>
                        <a href="#propos">A propos</a>
                    </li>
                    <li>
                        <a href="#realisation">Réalisation</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
                <div class="theme-switch">
		            <img id="theme-toggle" src="FrontOffice/assets/img/lever-du-soleil.png" alt="Sun">
	            </div>

            </nav>  
        </header>
        <section id="top">
            <h1 class="orange">JEUFFROY</h1><h1> KILLIAN</h1>    
        </section>
        <h3>Bienvenue sur mon portfolio</h3> 
        <div class="endheader">
            <span class="mouse">
                <img src="FrontOffice/assets/img/souris.png" alt="scroll mouse">
            </span>
            <span class="scroll">
                <img src="FrontOffice/assets/img/double-bas-white.png" alt="scroll" onclick="scrollToBottom()">
            </span>
            <a href="BackOffice/backoffice.php"><img src="FrontOffice/assets/img/user-white.png" alt="login" class="login"></a>
        </div>
    </div>
    <canvas id="canvas"></canvas><!-- Animation JS pour le background -->
    
    
    <main>
        <!-- Réalisation d'une section pour mettre toutes les descriptions et mes projets chaque section est divisé de div, span, et de titre avec toutes des class pour s'y retrouver dans le css et ne pas appliquer du style pour touts les éléments de l'index. -->
        <section id="propos">
            <div id="pp">
                <img src="FrontOffice/assets/img/IMG-2218.jpg" alt="photo profil" class="photo">
                <h2>JEUFFROY KILLIAN</h2>
                <h1 class="app"></h1>
            </div>
            <div id="resume">
                <h1 class="big">Portfolio</h1>
                <span>Je m'appelle Killian JEUFFROY, je suis étudiant en 1ère année de bachelor développement web à Digital Campus Paris.</span>
                <span>Passionné par l'informatique et la programmation depuis le collège, j'entreprends une formation complète pour devenir développeur fullstack.</span>
                <span>Sur ce portfolio vous pourrez retrouver mes réalisations ainsi que mon CV et des moyens de me contacter.</span>
                <span>Bonne visite !</span>
            </div>
        </section>
        <div id="competences">
            <h1 class="underline">Mes</h1><h1 class="orange">compétences</h1>
            <div id="rubriques">
                <div class="carte">
                    <div class="face face-front">
                    <h3 class="number">01</h3>
                        <h3>Développement web</h3>
                        <p class="desc">Je maitrise les différents langages de programmation, et je suis capable de réaliser des petits sites WordPress.</p>
                    </div>
                    <div class="face face-back">
                        <h2>Compétences</h2>
                        <img class="competences" src="FrontOffice/assets/img/html-5.png" alt="html5">
                        <img class="competences" src="FrontOffice/assets/img/css-3.png" alt="css3">
                        <img class="competences" src="FrontOffice/assets/img/php.png" alt="php">
                        <img class="competences" src="FrontOffice/assets/img/script-java.png" alt="js">
                        <img class="competences" src="FrontOffice/assets/img/mysql.png" alt="mysql">
                    </div>
                </div>
                <div class="carte">
                    <div class="face face-front">
                    <h3 class="number">02</h3>
                        <h3>Infographie</h3>
                        <p class="desc">J'ai de bonnes compétences en infographie, que ce soit pour faire des affiches ou le branding d'une entreprise.</p>
                    </div>
                    <div class="face face-back">
                        <h2>Compétences</h2>
                        <img class="competences" src="FrontOffice/assets/img/adobe-illustrator.png" alt="illustrator">
                        <img class="competences" src="FrontOffice/assets/img/photoshop.png" alt="photoshop">
                        <img class="competences" src="FrontOffice/assets/img/indesign.png" alt="indesign">
                    </div>
                </div>
            </div>
        </div>
        <section id="realisation">
            <h1 class="underline">Mes</h1><h1 class="orange">réalisations</h1> 
        </section>

        <section id="contact">
            <h1 class="underline">Contactez</h1><h1 class="orange">moi</h1>
            <div class="formulaire">
                <div class="social">
                    <div class="phone">
                        <img src="FrontOffice/assets/img/phone-white.png" alt="phone" class="imgphone" id="phone">
                        <h2 class="white">Phone : 06.15.38.40.58</h2>      
                    </div>
                    <div class="site">
                        <img src="FrontOffice/assets/img/web-white.png" alt="site" class="imgsite" id="site">
                        <h2 class="white">Site : killian-jeuffroy.fr</h2>
                    </div>
                    <div class="mail">
                        <img src="FrontOffice/assets/img/mail-white.png" alt="mail" class="imgmail" id="mail">
                        <h2 class="white">Mail : killianjeuffroy@gmail.com</h2>
                    </div>
                </div>
                <div class="contacter">
                    <h2>Pour me contacter via un formulaire tu as juste à cliquer ici</h2>
                    <a href="FrontOffice/contact.php"><button class="boutonForm">Formulaire</button></a>
                </div>
            </div>

            <footer>
                <div class="text">© 2023 - Killian Jeuffroy - Développeur web full-stack</div>
                <div class="lien"><a href="FrontOffice/rgpd.php">RGPD</a></div>
                <div class="lien"><a href="FrontOffice/mentionlegales.php">Mentions Légales</a></div>
                <div class="media-container">
                    <div class="medias-btn">
                        <a href="https://github.com/"><img src="FrontOffice/assets/img/github-white.png" alt="icone" class="icones" id="git"></a></div>
                    <div class="medias-btn">
                        <a href="https://www.linkedin.com/in/killian-jeuffroy/"><img src="FrontOffice/assets/img/linkedin-white.png" alt="icone" class="icones" id="linkedin"></a></div>
                    <div class="medias-btn">
                        <a href="https://twitter.com"><img src="FrontOffice/assets/img/twitter-white.png" alt="icone" class="icones" id="twitter"></a></div>
                </div>
            </footer>
            <!--<canvas id="canva"></canvas>-->
        </section>
        <button id="scroll-to-top-btn" title="Go to top"><img src="FrontOffice/assets/img/fleche.png"></button>
    </main>
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script> <!-- Script qui permet d'intégrer un effet d'écriture avec une autre fonction javascript. -->
    <script src="FrontOffice/assets/js/app.js"></script>
</body>
</html>
