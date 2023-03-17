<?php
echo '-2:';
var_dump((bool) -2); // マイナス値
echo '<br>';
echo '0:';
var_dump((bool) 0); // 数値の0
echo '<br>';
echo 'null:';
var_dump((bool) null); // null
echo '<br>';
echo 'foo:';
var_dump((bool) 'foo'); // 文字列
echo '<br>';
echo 'false:';
var_dump((bool) false); // false
echo '<br>';
echo 'false:';
var_dump((bool) 'false'); // 文字列のfalse
echo '<br>';
echo '\'\':';
var_dump((bool) ''); // 空文字
echo '<br>';
echo '0.0:';
var_dump((bool) 0.0); // 浮動小数点の0
echo '<br>';
echo '[1]:';
var_dump((bool) [1]); // 配列
echo '<br>';
echo 'undefined:';
// var_dump((bool) undefined); // 未定義
echo '<br>';
echo '[]:';
var_dump((bool) []); // 空の配列
echo '<br>';
echo '\'0\':';
var_dump((bool) '0'); // 文字列の0
echo '<br>';

$itemName = 'リンゴ';
$itemPrice = 100;
printf('その%sは%d円です', $itemName, $itemPrice);
