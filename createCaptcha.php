<?php
session_start();
 
 function secure_generate_string($strength = 6) {     
    $permitted_chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $secure= true;
    $input_length = strlen($permitted_chars);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        if($secure) {
            $random_character = $permitted_chars[random_int(0, $input_length - 1)];
        } else {
            $random_character = $permitted_chars[mt_rand(0, $input_length - 1)];
        }
        $random_string .= $random_character;
    }
  
    return $random_string;
} 
?>