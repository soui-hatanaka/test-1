<?php
session_start();

// カウンターの値をセッションに保存
if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0;
}

// ボタンが押されたらカウンターを増やす
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['counter']++;
}

// HTMLページにリダイレクト
header('Location: /index.php');
exit;
?>