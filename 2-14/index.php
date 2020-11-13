<?php
//count
$fruits = ["apple","grape","orange","peach"];
echo count($fruits);
echo "<br>";
//sort
$fruits = ["grape","apple","peach","orange"];
sort ($fruits);
var_dump($fruits);
echo "<br>";

$numbers = [43,4,53,16,24,7];
sort ($numbers);
var_dump($numbers);
echo "<br>";

//in_array
$members = ["takeshi","kouji","ryo","tomoyuki"];
var_dump(in_array("takeshi",$members));
if(in_array("takeshi",$members)){
    echo "たけしがいる";
}else{
    echo "たけしはいない";
}
echo "<br>";


//implode
$members = ["ryoko","eri","miho","ayako"];
$atstr = implode("@",$members);
var_dump($atstr);
echo "<br>";

//explode
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
$atstr = implode(",", $members);
var_dump($atstr);
echo "<br>";
$re_members = explode(",", $atstr);
var_dump($re_members);
echo "<br>";

$str = "6,15,23,35,43";
$array = explode(",",$str);
var_dump($array);

?>