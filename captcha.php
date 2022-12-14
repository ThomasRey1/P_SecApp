<?php 
session_start();    
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Captcha</title>
</head>

<body onload="setValue()">
    <form id="form" class="topBefore" action="result.php" method="POST">

        <input id="name" type="text" placeholder="NAME">
        <input id="email" type="text" placeholder="E-MAIL">
        <div class="captcha">
            <img src="images/new.png" onclick="renew()" class="newCaptcha" >

            <span id="captchaImage"><img src="createCaptcha.php" alt="captcha"></span>
            
            <img src="images/audio.png" onclick="play()" class="audioCaptcha" >
        </div>
        <input id="captcha" class="captchaAnswer" name="captcha" type="text" placeholder="YOUR ANSWER">

        <input id="submit" type="submit" value="GO!">
    </form>
    
</body>
<script src="audio.js"></script>
<script src="renew.js"></script>
</html>