<?php
// セッションを開始
session_start();

// セッションにデータを保存
$_SESSION['username'] = 'JohnDoe';
$_SESSION['email'] = 'john.doe@example.com';

// 受け取る側のページにリダイレクト
header('Location: sample12-2.php');
exit;
?>

