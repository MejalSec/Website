<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../../assets/owner/mejalsec.jpg">
    <title>MejalSec &middot; Hello World</title>
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
            width: 40%;
        }
        .content-images {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }
        .content-image {
            margin: 10px;
            display: block;
        }
        .content-image.css3 {
            width: 100px;
        }
        .content-image.js {
            width: 120px;
        }
        .content-image.php {
            width: 160px;
        }
        .content-image.html5 {
            width: 143px;
        }
    </style>
</head>
<body>
    <br>
    <div id="particles-js"></div>
    <div id="article" class="section-block">
        <h1 class="article-title">Hello World</h1>
        <br>
        <img src="../../assets/images/HelloWorld/HelloWorld.png" alt="MejalSec" class="article-image">
        <br>
        <div class="blog-post-header">
            <img src="../../assets/owner/mejalsec.jpg" alt="Author Photo" class="author-profile-photo">
            <div class="author-details">
                <span class="author-name">MejalSec</span>
                <span class="publish-date">Published on June 10, 2024</span>
            </div>
        </div>
        <div class="article-content">
            <h2>Hello World</h2>
            <p>Hi and welcome to the first article on my first website dedicated to myself and my portfolio, my blog where I will be posting write-ups. I'm really excited to share high-quality content and explanations that everyone can understand!</p>
            <h2>Creating the Website</h2>
            <p>I wanted to create a portfolio and a blog from scratch using pure code, without any frameworks. So, I opted for the following technologies: HTML, CSS, PHP, JS.</p>
            <div class="content-images">
                <img src="../../assets/images/HelloWorld/HTML5.png" alt="HTML5" class="content-image html5">
                <img src="../../assets/images/HelloWorld/CSS3.png" alt="CSS3" class="content-image css3">
                <img src="../../assets/images/HelloWorld/PHP.png" alt="PHP" class="content-image php">
                <img src="../../assets/images/HelloWorld/JS.png" alt="JS" class="content-image js">
            </div>
            <p>When I say doing everything by hand, I also mean manually rewriting URLs.</p>
            <div class="content-images-center">
                <img src="../../assets/images/HelloWorld/rewrite.png" alt="Rewriting URL" class="content-image">
                <p>Handling URL routes.</p>
                <img src="../../assets/images/HelloWorld/router.png" alt="Router" class="content-image">
            </div>
            <p>The handleRequest() method of the router uses $_SERVER['REQUEST_URI'] to obtain the request path. It iterates through the routes defined in $routes, checks for matches with the full path (base URL + route path) for GET requests.</p>
            <img src="../../assets/images/HelloWorld/router_function.png" alt="Router Function" class="content-image">
            <p>If a match is found, the router includes controllers/controllers.php if the file exists, instantiates the controller, and calls the specified method. In case of no match, it includes 404.php to handle "Not Found" errors.</p>
            <p>And here are the controllers that call the view files.</p>
            <img src="../../assets/images/HelloWorld/controller.png" alt="Controller" class="content-image">

            <h2>Which ideas for the website</h2>
            <p>In the future, why not change the website's stack to switch to React JS, a very interesting stack for advanced portfolios.</p>
            <img src="../../assets/images/HelloWorld/daniel.png" alt="Daniel" class="content-image">
            <h2>In Conclusion</h2>
            <p>In conclusion, thanks to all readers for joining me on this web development journey! Stay tuned for more exciting updates coming soon!</p>
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