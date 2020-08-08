<?php
//課題 連想配列
$colors = ["red" => "赤","blue" => "青", "green" => "緑"];
var_dump($colors);
echo '<br>';
$colors["yello"] = "黄色";
var_dump($colors);

echo '<br>';
echo '<br>';

//IT用語
echo "1. プルリクエスト（マージリクエスト）".'<br>';
echo "開発者のローカルリポジトリでの変更を他の開発者に通知する機能".'<br>';
echo "2. Git Flow".'<br>';
echo "チームで Git を使う際に役立つ、運用ルールをまとめたツール（プラグイン）".'<br>';
echo "3. CRON".'<br>';
echo "多くのUNIX系OSで標準的に利用される常駐プログラム（デーモン）の一種で、利用者の設定したスケジュールに従って指定されたプログラムを定期的に起動してくれるもの";
?>