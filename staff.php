<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>管理者ページ</title>
    <link rel="stylesheet" href="css/staff.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<h1>問い合わせ内容の確認</h1>

<div id="table-container">
    <table border="1">
        <tr>
            <th>投稿時間</th>
            <th>名前</th>
            <th>メールアドレス</th>
            <th>問い合わせ内容</th>
            <th>好きなアニメ</th>
            <th>ID</th>
            <th>WEB上に表示</th>
        </tr>

        <?php
try {
    $pdo = new PDO("mysql:host=localhost; dbname=like; charset=utf8", "root", "");
    $result = $pdo->query('SELECT * FROM user');
    while ($data = $result->fetch(PDO::FETCH_ASSOC)) {
        $displayStatus = $data['hyouji'] == 1 ? '表示中' : '非表示中';
        $buttonColor = $data['hyouji'] == 1 ? 'green' : 'red';
        echo "<tr>
                <td>{$data['time']}</td>
                <td>{$data['name']}</td>
                <td>{$data['mail']}</td>
                <td>{$data['coment']}</td>
                <td>{$data['anime']}</td>
                <td>{$data['id']}</td>
                <td>
                    <form action=\"\" method=\"post\">
                        <input type=\"hidden\" name=\"id\" value=\"{$data['id']}\">
                        <input type=\"hidden\" name=\"hyouji\" value=\"" . ($data['hyouji'] == 1 ? '0' : '1') . "\">
                        <input type=\"submit\" value=\"$displayStatus\" style=\"background-color: $buttonColor;\">
                    </form>
                </td>
            </tr>";
    }
} catch (PDOException $e) {
    exit('クエリの実行中にエラーが発生しました。エラー: ' . $e->getMessage());
} finally {
    $pdo = null;
}
?>


<?php

try {
    $pdo = new PDO("mysql:host=localhost; dbname=like; charset=utf8", "root", "");
if (!$pdo) {
exit('データベースに接続できませんでした。');
}
} 
catch (PDOException $e) {
exit('データベースに接続中にエラーが発生しました。エラー: ' . $e->getMessage());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
    $id = $_POST['id'];
    $hyouji = $_POST['hyouji'];

            
    $sql = "UPDATE user SET hyouji = :hyouji WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->bindParam(':hyouji', $hyouji, PDO::PARAM_INT);
if ($stmt->execute()) {
    echo '';
} else {
    echo '';
}
}
      
    $pdo = null;
    
?>
    </table>
</div>

</body>
</html>

