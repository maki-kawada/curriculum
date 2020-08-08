<?php
//課題提出
$name = "taro";
$password = "pass";

if($name == "taro" && $password == "pass"){
    echo "ログイン成功です";
}elseif($name == "taro" && $password != "pass"){
    echo "パスワードが間違っています。";
}elseif($name != "taro" && $password == "pass"){
    echo "名前が間違っています。";
}else{
    echo "入力情報が間違っています。";
}

echo '<br>';
echo '<br>';
echo "1. IDE（統合開発環境".'<br>';
echo "ソフトウェアの開発で利用されるこれらのソフトウェアを、その他の支援ツールなどとまとめてしまい、一つの開発環境で統合・統一的に扱えるようにした開発環境".'<br>';
echo "2. JOIN（データベースにおいて）".'<br>';
echo "データベースからデータを取り出す言語であるSQLの、複数テーブルの結合を行いたいときに使用する命令のこと".'<br>';
echo "3. コンフリクト".'<br>';
echo "複数の装置やプログラムなどが同じ資源を同時に利用しようとして競合状態になってしまうこと";
?>
