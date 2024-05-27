<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=like;charset=utf8", "root", "");
    if (!$pdo) {
        exit('データベースに接続できませんでした。');
    }

    $result = $pdo->query('SELECT * FROM user WHERE hyouji = 1 ORDER BY time ASC LIMIT 10');
    if (!$result) {
        exit('クエリの実行に失敗しました。');
    }

    $data = $result->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($data); // データをJSON形式で出力する
} catch (PDOException $e) {
    exit('クエリの実行中にエラーが発生しました。エラー: ' . $e->getMessage());
} finally {
    $pdo = null;
}
