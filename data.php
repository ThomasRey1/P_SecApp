<?php
session_start();
$data = array();
$i = 0;
var_dump($_SESSION['captcha']);
foreach ($_SESSION['captcha'] as $letter) {
    // if(!is_dir($image)){
    //     $data[$i] = $image;
    //     $i++;
    // }
    echo $letter;
}
echo json_encode($data);
?>