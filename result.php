<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Results captcha</title>
</head>

<body>
    <?php
    session_start();
        if(isset($_POST['captcha'])&& isset($_SESSION['captcha']) && strtolower($_POST['captcha']) == strtolower($_SESSION['captcha']))
        {
            echo "Vous n'êtes pas un robot. bien joué";
        }
        else{
            echo "Vous seriez pas un robot par hasard?";
        }
    ?>
    <br>
    <span class="funFont">retourner sur la <a href="captcha.php">page précédente</a></span>
</body>

</html>