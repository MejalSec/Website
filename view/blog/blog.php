<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/owner/mejalsec.jpg">
    <meta name="description" content="Explore the MejalSec blog, where write-ups and more will be posted.">
    <meta name="keywords" content="MejalSec, mejalsec, mejalSec, Mejalsec">
    <title>MejalSec &middot; Blog</title>
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
    <div id="particles-js"></div>
    <div id="blog" class="section-block">
        <h2>MejalSec's <span class="highlight">Blog</span></h2>
        <div class="blog-container">
            <div class="blog-post">
                <img src="assets/owner/mejalsec.jpg" alt="Hello World article" class="blog-post-image">
                <div class="blog-post-content">
                    <h3>MejalSec</h3>
                    <p>Explore my introduction and upcoming projects</p>
                    <button class="neon-button">
                        <a href="/portfolio/articles/MejalSec/" class="button-link">Read more</a>
                    </button>
                </div>
            </div>
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
        </div>
        <br>
        <button class="neon-button">
            <a href="/portfolio/" class="button-link">Go Back</a>
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