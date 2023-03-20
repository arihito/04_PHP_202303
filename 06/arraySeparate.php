<?php
$alph = 'A-B-C';

// [A,B,C]
$arr = explode('-', $alph);

// [A,B,C] + D
array_push($arr, 'D');

// 4 <= [A,B,C,D]
$num = count($arr);

// [A,B,C,D] + 4個
array_push($arr, $num . '個');

/* A | B | C | D | 4個 */
echo implode(' | ', $arr);

echo '<pre>';
print_r($arr);
echo '</pre>';

echo '<pre>';
print_r($_SERVER);
echo '</pre>';
