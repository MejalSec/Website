<?php
require_once 'logs.php';

$ipLogger = new IPLogger();
$ip = $ipLogger->getClientIP();
$proxyIP = $ipLogger->getProxyClientIP();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>WAIT!</title>
        <head>
            <link rel="icon" type="image/png" href="assets/owner/mejalsec.jpg" style="border-radius: 50%;">
        </head>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Nosifer&display=swap');
            body {
                background-color: black;
                color: red;
                font-family: 'Nosifer', cursive;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
                text-align: center;
                flex-direction: column;
            }
            #screamer {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: black;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                color: red;
                text-align: center;
            }
            #screamer img {
                max-width: 100%;
                max-height: 100%;
            }
            #screamer .screamer-text {
                font-size: 2em;
                margin-top: 20px;
            }
            .ip-info {
                font-size: 1em;
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
        <div id="screamer">
            <img src="/portfolio/punish/girl.jpg" alt="Screamer">
            <div class="screamer-text">You shouldn't be here!</div>
            <div class="ip-info">
                <p>Your IP: <?php echo $ip; ?></p>
                <p>Your Proxy IP: <?php echo $proxyIP ? $proxyIP : 'N/A'; ?></p>
                <p>Your IP has been reported.</p>
            </div>
            <audio id="screamer-audio" src="/portfolio/punish/weird.wav" autoplay></audio>
        </div>
    </body>
</html>