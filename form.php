<?php
session_start();
require('date.php');

if (!empty($_POST)) {
    $error = [];

    if ($_POST['name'] == "") {
        $error['name'] = 'blank';
    }

    if ($_POST['mail'] == "") {
        $error['mail'] = 'blank';
    }

    if ($_POST['coment'] == "") {
        $error['coment'] = 'blank';
    }
    if ($_POST['anime'] == "") {
        $error['anime'] = 'blank';
    }

    if (empty($error)) {
        try {

            $statement = $pdo->prepare('INSERT INTO user (name, mail, coment,anime) VALUES (:name, :mail, :coment, :anime)');
            $statement->execute(array(
                ':name' => $_POST['name'],
                ':mail' => $_POST['mail'],
                ':coment' => $_POST['coment'],
                ':anime' => $_POST['anime'],
            ));

            header('Location: form2.php');
            exit();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            exit();
        }
    }
}
?>


<html>

<head>
    <title>問い合わせ</title>
    <link rel="stylesheet" href="css/form.css">
    <script src="js/particles.js"></script>
    <style>
        .error {
            color: red;
            font-size: 0.8em;
        }
    </style>
</head>

<body>

    <div id="particles-js"></div>
    <div class="title">
        <h1>入力フォーム</h1>
    </div>


    <form action="" method="post">
        ユーザー名：<br />
        <input type="text" name="name" size="30" value="" placeholder="例: 山田　太郎" /><br />
        <?php if (isset($error['name']) && ($error['name'] == "blank")) : ?>
            <p class="error">*ユーザー名おせ～て～</p>
        <?php endif; ?>
        メールアドレス：<br />
        <input type="text" name="mail" size="30" value="" placeholder="例: yuhei.1518@docomo.ne.jp" /><br />
        <?php if (isset($error['mail']) && ($error['mail'] == "blank")) : ?>
            <p class="error">*あんたのアドレスなんか興味ないんだからね</p>
        <?php endif; ?>
        コメント：<br />
        <textarea name="coment" cols="30" rows="5" placeholder="例: ええ感じに書いて"></textarea><br />
        <?php if (isset($error['coment']) && ($error['coment'] == "blank")) : ?>
            <p class="error">*コメントくれへんなんて寂しいわ～</p>
        <?php endif; ?>
        好きなアニメ：<br />
        <textarea name="anime" cols="30" rows="5" placeholder="例: 鬼滅の刃"></textarea><br />
        <?php if (isset($error['anime']) && ($error['anime'] == "blank")) : ?>
            <p class="error">*せっかくやから好きなアニメ教えて～</p>
        <?php endif; ?>
        <br />
        <input type="submit" value="登録する" />
    </form>

    <form action="info.php" method="post">
        <input type="submit" value="閉じる" />
    </form>


    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="js/back.js"></script>

</body>

</html>