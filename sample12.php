<?php
// セッションを開始
session_start();

// セッションにデータを保存
$_SESSION['username'] = 'JohnDoe';
$_SESSION['email'] = 'john.doe@example.com';

// セッションデータを取得
$username = $_SESSION['username'];
$email = $_SESSION['email'];

// セッションデータを表示
echo 'Username: ' . $username . '<br>';
echo 'Email: ' . $email . '<br>';


?>
