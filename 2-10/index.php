<?php
function getRectangularVolume($length,$width,$height){
    $volume = $length*$width*$height;
    print $volume;
}

getRectangularVolume(5,10,8);

echo '<br>'.'<br>';
echo "1. ハッシュ化".'<br>';
echo "元のデータから一定の計算手順に従ってハッシュ値と呼ばれる規則性のない固定長の値を求め、その値によって元のデータを置き換えること。".'<br>';
echo "2. 総合テスト".'<br>';
echo "構築したシステムが全体で予定通りの機能を満たしているか、また機能や性能が仕様書通りに構築できているかを検証すること。".'<br>';
echo "3. デバッグ".'<br>';
echo "プログラムに潜む欠陥を見つけだし、取り除く作業のこと。"
?>