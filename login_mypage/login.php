<?php
session_start();
if(isset($_SESSION['id'])){
    header("Location:mypage.php");
}
?>


<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>マイページ</title>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>

        <body>
            <header>
                <img src="4eachblog_logo.jpg">
                <div class="login1"><a href="login.php">ログイン</a></div>
            </header>

            <main>
                <form action="mypage.php" method="post">
                    <div class="formcontents">
                        <div class="mail" >
                            <label>メールアドレス</label><br>
                            <input type="text" class="formbox" size="40" value="<?php 
                                                                            if(isset($_COOKIE['mail'])){
                                                                                echo $_COOKIE['mail'];
                                                                                }  ?>" name="mail">
                        </div>
                        <div class="password">
                            <label>パスワード</label><br>
                            <input type="password" class="formbox" size="40" value="<?php
                                                                                if(isset($_COOKIE['password'])){
                                                                                    echo $_COOKIE['password'];
                                                                                 } ?>" name="password">
                        </div>
                        <div class="login_check">
                            <label><input type="checkbox" class="formbox" size="40" name="login_keep" value="login_keep"
                            <?php
                            if(isset($_COOKIE['login_keep'])){
                                echo "checked='checked'";
                            }
                            ?>>ログイン状態を保持する</label>
                        </div>
                        <div class="login2">
                            <input type="submit" class="login_button" size="35" value="ログイン">
                        </div>
                    </div>
                </form>
            </main>

            <footer>
                ©2018InterNous.inc. All rights reserved
            </footer>
        </body>
</html>