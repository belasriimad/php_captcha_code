<?php
session_start();
header('Content-type:image/jpeg');
$captcha = $_SESSION['captcha'];


$fontsize = 30;

$image_width = 120;
$image_height = 40;


$image = imagecreate($image_width,$image_height);

imagecolorallocate($image,255,255,255);

$text_color = imagecolorallocate($image,0,0,0);

imagettftext($image,$fontsize,0,15,30,$text_color,'AlexBrush-Regular.ttf',$captcha);
//add lines to image background
for($i=1;$i<30;$i++){
    $x = rand(1,80);
    $x1 = rand(1,300);
    $y = rand(1,80);
    $y1 = rand(1,300);
    imageline($image,$x,$y,$x1,$y1,$text_color);
}
imagejpeg($image);
