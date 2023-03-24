<?php
if ($seireki < 1912) {
    $year = $seireki - 1867;
    if ($year == 1) {
        $wareki = '明治元年';
    } else {
        $wareki = '明治' . $year . '年';
    }
} elseif ($seireki < 1926) {
    $year = $seireki - 1911;
    if ($year == 1) $year = '元';
    $wareki = '大正' . $year . '年';
} elseif ($seireki < 1989) {
    $year = $seireki - 1925;
    $wareki = '昭和' . ($year == 1 ? '元' : $year) . '年';
} elseif ($seireki < 2019) {
    $year = $seireki - 1988;
    $wareki = '平成' . $year . '年';
    if ($year == 1) {
        $wareki = str_replace('1年', '元年', $wareki);
    }
} else {
    $year = $seireki - 2018;
    switch ($year) {case ($year == 1): $year = '元';}
    $wareki = '令和' . $year . '年';
}
