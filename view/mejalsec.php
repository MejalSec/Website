<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="assets/owner/mejalsec.jpg" style="border-radius: 50%;">
        <meta name="description" content="Explore the portfolio of MejalSec, a versatile freelance in pentesting, development, and design.">
        <meta name="keywords" content="MejalSec, mejalsec, mejalSec, Mejalsec">
        <meta property="og:title" content="MejalSec">
        <meta property="og:description" content="Explore the portfolio of MejalSec, a versatile freelance in pentesting, development, and design.">
        <meta property="og:image" content="https://mejalsec.fr/assets/owner/mejalsec.jpg">
        <meta property="og:url" content="https://mejalsec.fr/">
        <meta property="og:type" content="website">
        <meta name="author" content="MejalSec">
        <meta name="robots" content="index, follow">
        <meta property="og:locale" content="en_US">
        <meta property="og:site_name" content="MejalSec">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="MejalSec">
        <meta name="twitter:description" content="Explore the portfolio of MejalSec, a versatile freelance in pentesting, development, and design.">
        <meta name="twitter:image" content="https://mejalsec.fr/assets/owner/mejalsec.jpg">
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
            <div style="display: flex; justify-content: center; align-items: center; width: 100%;">
                <button id="theme-toggler" class="theme-toggler"></button>
            </div>
        </header>
        <br>
        <div id="particles-js"></div>
        <!-- Old idea with particles, but I keep it just in case... -->
        <div id="home" class="section-block">
            <img src="assets/owner/mejalsec.jpg" alt="MejalSec" class="profile-photo">
            <h1>I am <span class="highlight">MejalSec</span></h1>
            <h2>And I am a <span id="dynamic-role" class="highlight"></span></h2>
            <div class="social-links">
                <a href="mailto:mejalsec@proton.me" target="_blank">
                    <img src="assets/logos/logo_mail.png" alt="Email" class="email-icon">
                </a>
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
        <div id="services" class="section-block">
            <h2>My <span class="highlight">skills</span></h2>
            <div class="service-container">
                <div class="service">
                    <img src="assets/logos/logo_cyber.png" alt="Cybersecurity" class="service-img">
                    <h3>Cybersecurity</h3>
                    <p>Explore my cybersecurity projects</p>
                    <button class="neon-button">
                        <a href="/portfolio/maintenance" class="button-link">See more</a>
                    </button>
                </div>
                <div class="service">
                    <img src="assets/logos/logo_dev.png" alt="Development" class="service-img">
                    <h3>Development</h3>
                    <p>Discover my development projects</p>
                    <button class="neon-button">
                        <a href="/portfolio/maintenance" class="button-link">See more</a>
                    </button>
                </div>
                <div class="service">
                    <img src="assets/logos/logo_stylo.png" alt="Design" class="service-img">
                    <h3>Design</h3>
                    <p>Check out my design projects</p>
                    <button class="neon-button">
                        <a href="/portfolio/maintenance" class="button-link">See more</a>
                    </button>
                </div>
            </div>
        </div>
        <div id="blog" class="section-block">
            <h2>My <span class="highlight">blog</span></h2>
            <!--...-->
            <div class="blog-container">
                <div class="blog-post">
                    <img src="assets/owner/mejalsec.jpg" alt="MejalSec article" class="blog-post-image">
                    <div class="blog-post-content">
                        <h3>MejalSec</h3>
                        <p>Explore my introduction and upcoming projects</p>
                        <button class="neon-button">
                            <a href="/portfolio/articles/MejalSec/" class="button-link">Read more</a>
                        </button>
                    </div>
                </div>
            </div>
            <!--...-->
            <div class="blog-container">
                <div class="blog-post">
                    <img src="assets/images/HelloWorld/HelloWorld.png" alt="Hello World article" class="blog-post-image">
                    <div class="blog-post-content">
                        <h3>Hello World</h3>
                        <p>My first website dedicated to my projects and to myself</p>
                        <button class="neon-button">
                            <a href="/portfolio/articles/HelloWorld/" class="button-link">Read more</a>
                        </button>
                    </div>
                </div>
                <!--...-->
            </div>
            <br>
            <button class="neon-button">
                <a href="/portfolio/blog" class="button-link">See more</a>
            </button>
        </div>
        <footer>
            <hr class="footer-line">
            <div class="footer-credits">
                <p>&copy; 2024 MejalSec</p>
                <p><a href="https://github.com/MejalSec/Website" target="_blank">Source code available</a></p>
                <p><a href="http://dx9lfwqy6tcczspwv5qrfwbv5tbpj4h7w8omcpdyy2y1bgn1l5idprpl.onion" target="_blank">Site available on the Dark Web</a></p>
            </div>
        </footer>
        <script src="js/script.js"></script>
    </body>
</html>