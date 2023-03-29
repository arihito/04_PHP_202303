<?php
const SMTP_HOST     = 'smtp.gmail.com';
const SMTP_PORT     = 587;
const SMTP_PROTOCOL = 'tls';
const GMAIL_SITE    = 'arihito.m@gmail.com';
const GMAIL_APPPASS = '';
const MAIL_FROM     = ['arihito.m@gmail.com' => '公式サイト'];
const MAIL_TITLE    = 'お問い合わせありがとうございます。';

/**
 * Swiftメッセージインスタンスを受けてメール本文を返す
 *
 * @param object|null $message
 * @param array|null $messageArr
 * @return string|null
 */
function setMailBody(?object $message, ?array $messageArr): ?string
{
    if (empty($message) || empty($messageArr)) return false;
    return <<<EOT
    <img src="{$message->embed(Swift_Image::fromPath('logo.png'))}">
    <h2>お問い合わせありがとうございます</h2>
    <p>この度はお問い合わせいただき誠にありがとうございました。<br>送信内容を以下の内容で承りました。</p>
    ----------------------------
    <p>質問内容：{$messageArr['query']}</p>
    <p>お名前：{$messageArr['name']}</p>
    <p>メールアドレス：{$messageArr['email']}</p>
    <p>お問い合わせ：{$messageArr['detail']}</p>
    ----------------------------
    EOT;
}

/**
 * 問い合わせたユーザのメールと
 * 名前を受け取り送り先の配列を返す
 *
 * @param string|null $name
 * @param string|null $email
 * @return array|null
 */
function sendUserMail(?string $name, ?string $email): ?array
{
    if (empty($name) || empty($email)) return false;
    return [
        'arihito.m@gmail.com'  => 'Web担当者様',
        $email => $name . '様'
    ];
}
