<?php
session_start();

return convertTextToImage(secure_generate_string());

function secure_generate_string($strength = 6) {     
    $permitted_chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';    
    $input_length = strlen($permitted_chars);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {        
        $random_character = $permitted_chars[random_int(0, $input_length - 1)];
        $random_string .= $random_character;
        
    }
    $_SESSION['captcha'] = $random_string;
    return $random_string;
}

function convertTextToImage($textToConvert)
{
    $font = 'fonts/Thomaaaasfont-Regular.ttf';
    $fontsize = 30;
    $angle = 0;

    $imgHeight = 70;
    $imgWidth = 0;

    for($i = 0; $i <strlen($textToConvert);$i++)
    {
        $letters[$i] = $textToConvert[$i];
        $textbox = imagettfbbox($fontsize,$angle,$font,$letters[$i]);
        $textWidth= abs(max($textbox[2],$textbox[4]));
        $imgWidth +=5+$textWidth;
    }
    
    $img = imagecreatetruecolor($imgWidth, $imgHeight);

    $red = rand(10, 90);
    $green = rand(40, 100);
    $blue = rand(75, 150);

    $backColor = imagecolorallocate($img,$red,$green,$blue);
    $textColor = imagecolorallocate($img, $red+15,$green+25,$blue+40);
    imagefilledrectangle($img,0,0,$imgWidth-1,$imgHeight-1,$backColor);

    $count = 1;
    foreach($letters as $letter)
    {
        $textbox = imagettfbbox($fontsize,$angle,$font,$letter);
        $textWidth= abs(max($textbox[2],$textbox[4]));
        $textHeight= abs(max($textbox[5],$textbox[7]));
        $x = $count+($textWidth/2);
        $y = (imagesy($img)/2+$textHeight/3);        

        $count = $count+$textWidth;
        imagettftext($img,$fontsize,0,$x,$y,$textColor,$font,$letter);
    }        

    $path = getcwd();
    $name = "img".rand(0,100000).".png";
    imagepng($img);
}