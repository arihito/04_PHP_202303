<?php
$birthStone = [
    1  => 'ガーネット',
    2  => 'アメジスト',
    3  => 'アクアマリン',
    4  => 'ダイヤモンド',
    5  => 'エメラルド',
    6  => 'パール',
    7  => 'ルビー',
    8  => 'ペリドット',
    9  => 'サファイア',
    10 => 'オパール',
    11 => 'トパーズ',
    12 => 'ターコイズ'
];
$month = '';
if (!empty($_POST)) {
    $month = $_POST['month'];
    $stoneName = $birthStone[$month];
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>誕生石</title>
</head>

<body>
    <h1>誕生石</h1>
    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
        <p><?= $month ?>月の誕生石は<?= $stoneName ?>です！</p>
    <?php endif; ?>
    <form action="" method="post" novalidate>
        <p>誕生石を選んでください：
            <select name="month">
                <option value="1" <?php if ($month == 1) echo 'selected';?>>1月</option>
                <option value="2" <?php if ($month == 2) echo 'selected';?>>2月</option>
                <option value="3" <?php if ($month == 3) echo 'selected';?>>3月</option>
                <option value="4" <?php if ($month == 4) echo 'selected';?>>4月</option>
                <option value="5" <?php if ($month == 5) echo 'selected';?>>5月</option>
                <option value="6" <?php if ($month == 6) echo 'selected';?>>6月</option>
                <option value="7" <?php if ($month == 7) echo 'selected';?>>7月</option>
                <option value="8" <?php if ($month == 8) echo 'selected';?>>8月</option>
                <option value="9" <?php if ($month == 9) echo 'selected';?>>9月</option>
                <option value="10" <?php if ($month == 10) echo 'selected';?>>10月</option>
                <option value="11" <?php if ($month == 11) echo 'selected';?>>11月</option>
                <option value="12" <?php if ($month == 12) echo 'selected';?>>12月</option>
            </select>
            <input type="submit" value="送信">
        </p>
    </form>
</body>

</html>
