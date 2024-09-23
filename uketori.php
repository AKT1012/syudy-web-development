<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>名前表示</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // POSTメソッドで送信されたデータを取得
        $name = htmlspecialchars($_POST['name']);
        
        // 名前を表示
        echo "<h1>こんにちは、$name さん！</h1>";
    } else {
        echo "<h1>名前が送信されていません。</h1>";
    }
    ?>
</body>
</html>
