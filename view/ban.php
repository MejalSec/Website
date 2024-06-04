<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Banned | MejalSec</title>
        <link rel="stylesheet" href="css/styles.css">
        <link rel="icon" type="image/png" href="assets/owner/mejalsec.jpg" style="border-radius: 50%;">
        <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
        <style>
            body, html {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100%;
                margin: 0;
                background-color: var(--header-background);
            }
            .ban-container {
                text-align: center;
                color: inherit;
            }
            .ban-container img {
                max-width: 200px;
                margin-bottom: 20px;
            }
            .ban-container h1 {
                font-size: 2em;
                margin-bottom: 10px;
            }
            .ban-container p {
                font-size: 1.2em;
            }
            .neon-button {
                padding: 12px 20px;
                font-weight: bold;
                background-color: darkred;
                color: white;
                border: none;
                border-radius: 5px;
                transition: background-color 0.2s, transform 0.2s;
                font-family: 'Orbitron', sans-serif;
                text-decoration: none;
            }

            .neon-button:hover {
                background-color: rgb(182, 74, 74);
                transform: translateY(-2px);
            }
        </style>
    </head>
    <body>
        <div class="ban-container">
            <img src="assets/logos/logo_ban.png" alt="404 Logo">
            <h1>Too Many Requests</h1>
            <p>You have been temporarily banned</p>
            <a href="/portfolio" class="neon-button">Back to Site</a>
        </div>
    </body>
</html>