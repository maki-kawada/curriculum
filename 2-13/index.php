<?php
//ceil(切り上げ)
$x = 15.2;
echo ceil($x).'<br>';

//floor（切り捨て）
$x = 7.876;
echo floor($x);
echo '<br>';

//round(四捨五入)
$x = 65.987;
echo round($x);
echo '<br>';

//pi(円周率)
echo pi();
echo '<br>';

function circleArea($r){
    $circle_area = $r * $r * pi();
    echo round($circle_area);
}
circleArea(4);
echo '<br>';

//mt_rand(乱数)
echo mt_rand(1,200);
echo '<br>';

//strlen（文字の長さ）
$str = "momomomomomomo";
echo strlen($str);
echo '<br>';

//strpos
$str = "kawada";
echo strpos($str,"w");
echo '<br>';

//substr
$str = "kawada";
echo substr($str,-6,2);
echo '<br>';

//str_replace
$str = "kawada";
echo str_replace("kawa","KAWA",$str);
echo '<br>';

$str = "I am kawada";
echo str_replace(" ","",$str);
echo '<br>';

//マルチバイト
$str = "こんにちは";
echo mb_strlen($str);
echo '<br>';

//printf
$name = "川田さん";
$number = 35;
printf("%sの前に%d人並んでいます。",$name,$number);
echo '<br>';

$name = "川田さん";
$number = 35;
$time = 3;
printf("%sの前に%d人並んでいるので、待ち時間は約%d時間です。",$name,$number,$time);
echo '<br>';

$limit_hour = 30;
$limit_minute = 6;
printf("残り%02d時間%02d分",$limit_hour,$limit_minute);
echo '<br>';

//sprintf
$limit_hour = 5;
$limit_minute = 45;
$limit_time = sprintf("残り%02d時間%02d分",$limit_hour,$limit_minute);
echo $limit_time;

?>