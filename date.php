<?php
try {
    $pdo = new PDO("mysql:host=localhost; dbname=like; charset=utf8", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'DB接続エラー' . $e->getMessage();
}
?>