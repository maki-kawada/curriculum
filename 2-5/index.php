<?php
$age = 15;

if($age >= 20){
    echo "お酒が飲めるぞ！！！";
}else{
    echo "お酒は20歳になってから！";
}

echo '<br>';
?>

<?php
//学生かどうか
$is_student = true;

if($is_student){
    echo "あなたは学生です。";
}

echo '<br>';
?>

<?php
$age = 23;
$is_student = false;

if($age < 25 && $is_student){
    echo "学生パックが使えるよ。";
}elseif($age < 25){
    echo "若者応援割引が使えるよ。";
}
echo '<br>';
?>

<?php
$blood =  'O';

if($blood == 'A'){
    echo "A型です。";
}elseif($blood == 'O'){
    echo "O型です。";
}elseif($blood == 'B'){
    echo "B型です。";
}elseif($blood == 'AB'){
    echo "AB型です。";
}else{
    echo "A/B/O/ABから選択してください";
}
echo '<br>';

//switch文
switch ($blood){
    case 'A':
        print 'A型です。';
    break;
    case 'B':
        print 'B型です。';
    break;
    case 'O':
        print 'O型です。';
    break;
    case 'AB':
        print 'AB型です。';
    break;
    default:
    echo 'A/B/O/ABから選択してください。';
}
echo '<br>';


$name = "";

if($name != ""){
    echo '名前を受け付けました';
}else{
    echo '名前を入力してください';
}
echo '<br>';

//三項演算子
echo($name != "") ? '名前を受け付けました' : '名前を入力してください';
echo '<br>';
echo '<br>';
