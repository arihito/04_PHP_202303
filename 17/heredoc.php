<?php
$x = 'こんにちは';

/**
 * XSS対策の参照名省略
 *
 * @param string | null $string
 * @return string | null
 *
 */
function h(?string $string): ?string
{
    if (empty($string)) return null;
    return htmlspecialchars($string, ENT_QUOTES | ENT_HTML5, 'UTF-8');
}

const A = 'あいうえ';

$a = <<<abc
<h1>$x</h1>  
<p>本文</p>
A
$x
abc;

echo $a;
