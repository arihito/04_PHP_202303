<?php
session_start();
if ($_SESSION['authenticated'] != true) {
    header('Location: login.php');
    exit;
}
$user = $_SESSION['userId'];
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員専用</title>
</head>

<body>
    <h1>会員専用ページ</h1>
    <p>あなたのユーザーIDは<?=$user?>です。</p>
    <p>このページでは会員専用の情報が閲覧できます。</p>
    <p><a href="logout.php">ログアウトする</a></p>
</body>

</html>
