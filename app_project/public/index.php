<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="public/images/favicon.ico">
    <title>カウンター</title>
    <style>
        .counter {
            font-size: 24px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <?php
    session_start();

    // カウンターの値をセッションに保存
    if (!isset($_SESSION['counter'])) {
        $_SESSION['counter'] = 0;
    }
    ?>
    <div class="counter">カウント: <?php echo $_SESSION['counter']; ?></div>
    <form action="counter.php" method="post">
        <button type="submit">+1</button>
    </form>
</body>
</html>
