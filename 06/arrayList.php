<?php
$fruits = ['リンゴ', 'バナナ', 'ぶどう'];
// インデックス番号「2」の内容を「イチゴ」に変更
// インデックス番号「3」に「メロン」の要素を追加
// インデックス番号「1」の要素を削除

$fruits[2] = 'イチゴ';
$fruits[3] = 'メロン';
unset($fruits[1]);

echo '<pre>';
var_dump($fruits);
echo '</pre>';

echo '<pre>';
print_r($fruits);
echo '</pre>';
