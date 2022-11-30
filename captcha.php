<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Captcha</title>
</head>

<body>
    <form id="form" class="topBefore" action="result.php" method="POST">

        <input id="name" type="text" placeholder="NAME">
        <input id="email" type="text" placeholder="E-MAIL">
        <div class="captcha">
            Captcha here
            <input onclick="play()" type="button">PLAY MY AUDIO</input>
        </div>
        <input id="captcha" class="captchaAnswer" type="text" placeholder="YOUR ANSWER">

        <input id="submit" type="submit" value="GO!">
    </form>
</body>
<script src="audio.js"></script>
</html>