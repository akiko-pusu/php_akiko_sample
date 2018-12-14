<?php
/** 
 * Run sample: 
 * Use php.ini at ./etc/php.ini
    $ cd php_demo_sample
    $ php -c ./etc/php.ini  -S localhost:3000
 */
/* Test for using Sider by Actcat, Inc. */
/* 課題1: ブラウザをリダイレクトさせます */
if (isset($_GET['url'])) {
    $redirect_url = $_GET['url'];
    header("Location: " . $redirect_url);
} else {
    error_log("url parameter not specified.\n", 3, './app.log');
}

/* 課題2: 変数を宣言して表示します */
$var = 1;
var_dump($var);
echo("<p>Variable: $var</p>\n");

/* 課題3:  "apple", "raspberry" という値が入った配列の長さを出力 */
$array = array();
array_push($array, "apple", "raspberry");
var_dump($array);

// 長さを取り出します
$array_count = count($array);
echo("<p>Count: $array_count</p>\n");
?>
