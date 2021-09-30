<?php
mb_internal_encoding("utf8");
session_start();

if(empty($_POST['from_mypage'])){
    header("Location:login_error.php");
}

?>

<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="mypage_hensyu.css">
    </head>

        <body>
            <header>
                <img src="4eachblog_logo.jpg">
                <div class="logout"><a href="log_out.php">ログアウト</a></div>
            </header>

            <main>
                <h2>会員情報</h2>
                <p><?php echo "こんにちは！".$_SESSION['name']."さん"?></p>

                <form action="mypage_update.php" method="post">
                    <div class="mypage1">
                        <img src="<?php echo $_SESSION['picture'];?>">
                    </div>

                    <div class="name">
                        <p>氏名：<input type="text" size="30" value="<?php echo $_SESSION['name']; ?>" name="name">
                        </p>
                    </div>
                    <div class="mail">
                        <p>メール：<input type="text" size="30" value="<?php echo $_SESSION['mail']; ?>" name="mail">
                        </p>
                    </div>
                    <div class="password">
                        <p>パスワード：<input type="text" size="30" value="<?php echo $_SESSION['password']; ?>" name="password">
                        </p>
                    </div>
                    <div class="comments">
                        <textarea rows="3" cols="85" name="comments"><?php echo $_SESSION['comments']; ?></textarea>
                    </div>
                    <div class="edit">
                        <input type="submit" class="submit_hensyu" size="35" value="この内容に変更する">
                    </div>
                </form>
            </main>

            <footer>
                ©2018InterNous.inc. All rights reserved
            </footer>
        </body>
</html>