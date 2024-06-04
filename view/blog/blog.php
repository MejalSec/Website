<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Explorez le portfolio de MejalSec, un freelance polyvalent en pentest, développement et design.">
        <meta name="keywords" content="MejalSec">
        <title>MejalSec</title>
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
        <script>
            (function() {
                const savedTheme = localStorage.getItem('theme');
                if (savedTheme) {
                    document.documentElement.classList.add(savedTheme);
                } else {
                    document.documentElement.classList.add('dark-theme');
                }
            })();
        </script>
    </head>
    <body>
        <header>
            <div style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
                <button id="theme-toggler" class="theme-toggler"></button>
                <div class="social-links" style="width: 40%;">
                    <a href="https://twitter.com/MejalSec" target="_blank">
                        <img src="assets/platform/x.png" alt="Twitter" class="twitter-icon">
                    </a>
                    <a href="https://www.root-me.org/MejalSec" target="_blank">
                        <img src="assets/platform/rootme.png" alt="Root Me">
                    </a>
                    <a href="https://app.hackthebox.com/profile/222280" target="_blank">
                        <img src="assets/platform/hackthebox.png" alt="Hack The Box" class="hackthebox-icon">
                    </a>
                    <a href="https://tryhackme.com/p/MejalSec" target="_blank">
                        <img src="assets/platform/tryhackme.png" alt="TryHackMe">
                    </a>
                    <a href="https://github.com/MejalSec" target="_blank">
                        <img src="assets/platform/github.png" alt="GitHub">
                    </a>
                </div>
            </div>
        </header>
        <div id="particles-js"></div>
        <div id="home" class="section-block">
            <img src="assets/owner/mejalsec.jpg" alt="MejalSec Photo" class="profile-photo">
            <h1>Yo. Je suis <span class="highlight">BLOG</span> !</h1>
            <h2>Et je suis <span id="dynamic-role" class="highlight"></span> freelance.</h2>
        </div>
        <div id="services" class="section-block">
            <h2>Mes <span class="highlight">compétences</span></h2>
            <div class="service-container">
                <div class="service">
                    <img src="assets/logos/logo_cyber.png" alt="Cybersécurité" class="service-img">
                    <h3>Cybersécurité</h3>
                    <p>Projet</p>
                    <button class="neon-button">Voir plus</button>
                </div>
                <div class="service">
                    <img src="assets/logos/logo_dev.png" alt="Développement" class="service-img">
                    <h3>Développement</h3>
                    <p>Developpement projects</p>
                    <button class="neon-button">Voir plus</button>
                </div>
                <div class="service">
                    <img src="assets/logos/logo_stylo.png" alt="Design" class="service-img">
                    <h3>Design</h3>
                    <p>Design projects</p>
                    <button class="neon-button">Voir plus</button>
                </div>
            </div>
        </div>
        <div id="blog" class="section-block">
            <h2>Mon <span class="highlight">blog</span></h2>
                <!--...-->
            <div class="blog-container">
                <div class="blog-post">
                    <img src="assets/owner/mejalsec.jpg" alt="Image illustrative pour l'article Hello World" class="blog-post-image">
                    <div class="blog-post-content">
                        <h3>Hello World</h3>
                        <p>Premier site de MejalSec, blabla. Responsive, entièrement fait à la main.</p>
                        <button class="neon-button">Lire plus</button>
                    </div>
                </div>
                <!--...-->
            </div>
            <br>
            <button class="neon-button">Voir plus</button>
        </div>
        <footer>
            <hr class="footer-line">
            <div class="footer-credits">
                <p>&copy; MejalSec</p>
                <p><a href="https://github.com/MejalSec/portfolio" target="_blank">Code source du site</a></p>
                <p><a href="http://youronionurl.onion" target="_blank">Site disponible sur le Dark Web</a></p>
            </div>
        </footer>
        <script src="js/script.js"></script>
    </body>
</html>