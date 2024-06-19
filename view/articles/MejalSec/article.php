<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../../assets/owner/mejalsec.jpg">
    <title>MejalSec &middot; MejalSec</title>
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="../../css/responsive.css">
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
    <style>
        .article-image {
            display: block;
            margin: 0 auto;
            padding: 10px;
            width: 30%;
        }
        .content-image-small {
            width: 45%;
            margin: 10px 2.5%;
        }
        .content-images {
            display: flex;
            justify-content: center;
        }
        .offsec-image {
            width: 50%;
            display: block;
            margin: 0 auto;
        }
        .epitech-image {
            width: 30%;
            display: block;
            margin: 0 auto;
        }
        .neon-button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            text-align: center;
            text-decoration: none;
            color: #fff;
            border: 2px solid #00ffff;
            transition: background-color 0.3s, box-shadow 0.3s;
        }
        .neon-button:hover {
            background-color: #00ffff;
            box-shadow: 0 0 10px #00ffff, 0 0 20px #00ffff;
        }
        .neon-button a {
            color: inherit;
            text-decoration: none;
        }
        .content-images-center {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        .content-image {
            width: 30%;
            margin: 10px;
            display: block;
        }
    </style>
</head>
<body>
    <br>
    <div id="particles-js"></div>
    <div id="article" class="section-block">
        <h1 class="article-title">MejalSec</h1>
        <br>
        <img src="../../assets/owner/mejalsec.jpg" alt="MejalSec" class="article-image">
        <br>
        <div class="blog-post-header">
            <img src="../../assets/owner/mejalsec.jpg" alt="Author Photo" class="author-profile-photo">
            <div class="author-details">
                <span class="author-name">MejalSec</span>
                <span class="publish-date">Published on June 18, 2024</span>
            </div>
        </div>
        <div class="article-content">
            <p>Hello, readers of this portfolio. I'm MejalSec, currently a computer science student at Epitech in France pursuing a Master's degree (BAC +5). From a young age, I've been passionate about computers, which led me to specialize in offensive cybersecurity.</p>
            <img src="../../assets/images/MejalSec/Epitech.png" alt="Epitech" class="epitech-image">
            <h2>Why and How?</h2>
            <p>My journey into computing began out of curiosity and self-study. I realized early on that my career path would naturally align with technology, as I feel more comfortable surrounded by computers than people. Childhood experiences with gaming ignited my interest and drove me to deepen my technical skills.</p>
            <h2>My Path</h2>
            <p>After completing high school and taking a two-year break, during which I intensified my self-study, I focused heavily on cybersecurity, utilizing dedicated learning platforms.</p>
            <div class="content-images-center">
                <img src="../../assets/images/MejalSec/Root-Me.jpeg" alt="Root-Me" class="content-image">
                <img src="../../assets/images/MejalSec/HackTheBox.png" alt="HackTheBox" class="content-image">
                <img src="../../assets/images/MejalSec/TryHackMe.png" alt="TryHackMe" class="content-image">
            </div>
            <h2>My favorite programming language</h2>
            <p>Simply the best programming language. The language of excellence.</p>
            <img src="../../assets/images/MejalSec/C.png" alt="C" class="content-image">
            <h2>My Road Ahead</h2>
            <p>Before entering the workforce, my primary goals are to achieve my OffSec certifications. Specifically, I'm aiming for the OSCP, OSEP, and OSWE certifications, while gaining valuable practical experience through internships.</p>
            <img src="../../assets/images/MejalSec/OffSec.png" alt="OffSec" class="offsec-image">
            <h2>Current Achievements</h2>
            <p>I currently hold the eJPT certification from INE Security and am actively pursuing the CompTIA PenTest+ certification.</p>
            <div class="content-images">
                <img src="../../assets/images/MejalSec/eJPT.png" alt="eJPT" class="content-image-small">
                <img src="../../assets/images/MejalSec/comPTIAPentestPlus.webp" alt="eJPT" class="content-image-small">
            </div>
            <h2>In Conclusion</h2>
            <p>Today, I am living my best life studying at one of France's top computer science schools, continually improving in my chosen field. I look forward to sharing my journey and experiences on this platform.</p>
            <p>Thank you for taking the time to read this brief introduction.</p>
        </div>
    </div>
    <footer>
        <hr class="footer-line">
        <div class="footer-credits">
            <p>&copy; 2024 MejalSec</p>
            <p><a href="https://github.com/MejalSec/Website" target="_blank">Source code available</a></p>
            <p><a href="http://dx9lfwqy6tcczspwv5qrfwbv5tbpj4h7w8omcpdyy2y1bgn1l5idprpl.onion" target="_blank">Site available on the Dark Web</a></p>
        </div>
    </footer>
    <script src="../../js/script.js"></script>
</body>
</html>