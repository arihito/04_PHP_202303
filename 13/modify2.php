<?php
$d1 = new DateTime('last day of February 2025');
$d2 = new DateTime('-100 days');
$interval = $d1->diff($d2);
$invert = $interval->invert;
$days = $interval->days;

if ($days == 0) {
    echo '同じ日付です';
} elseif ($invert == 1) {
    echo getJpDate($d1) . 'の方が「' . $days . '日分」' . getJpDate($d2) . 'よりも新しいです。';
} else {
    echo getJpDate($d2) . 'の方が「' . $days . '日分」' . getJpDate($d1) . 'よりも新しいです。';
}

/**
 * 和製の日付の文字列を返す
 *
 * @param object|null $obj
 * @return string|null
 */
function getJpDate(?object $obj): ?string
{
    if (empty($obj)) return false;

    $week = ['日', '月', '火', '水', '木', '金', '土'];
    return $obj->format('Y年m月d日') . '(' . $week[$obj->format('w')] . ')';
}
