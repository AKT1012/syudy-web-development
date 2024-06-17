<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // アップロードされたファイル情報
    $file = $_FILES['image'];
    $fileName = $file['name'];
    $fileType = $file['type'];
    $fileSize = $file['size'];
    $fileTmpName = $file['tmp_name'];
    $fileError = $file['error'];

    // アップロード先のディレクトリ
    $uploadDir = 'uploads/';
    // アップロード先のファイルパス
    $uploadFilePath = $uploadDir . basename($fileName);

    // エラーチェック
    if ($fileError === UPLOAD_ERR_OK) {
        // 画像を指定ディレクトリに移動
        if (move_uploaded_file($fileTmpName, $uploadFilePath)) {
            echo "<h2>アップロード成功！</h2>";
            echo "<p>ファイル名: $fileName</p>";
            echo "<p>ファイルタイプ: $fileType</p>";
            echo "<p>ファイルサイズ: $fileSize bytes</p>";
            echo "<p>画像:</p>";
            echo "<img src='$uploadFilePath' alt='Uploaded Image' style='max-width: 300px; height: auto;'>";
        } else {
            echo "<p>ファイルのアップロードに失敗しました。</p>";
        }
    } else {
        echo "<p>エラー: ファイルのアップロードに失敗しました。エラーコード: $fileError</p>";
    }
} else {
    echo "<p>不正なリクエストです。</p>";
}
?>
