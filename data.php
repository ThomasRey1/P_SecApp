<?php
session_start();
$data = [];
$letters = str_split($_SESSION['captcha']);
foreach ($letters as $letter) {
    $data[] = $letter;
    //echo $letter;
}
echo json_encode($data);
?>