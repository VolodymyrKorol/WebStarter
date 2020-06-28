<?php
include_once('config/db/data-base.php');

if (isset($_POST['submit-login'])){

    $db = new DataBase();
    if($res = $db->query("SELECT * FROM `users` WHERE `user_login` LIKE '". trim($_POST['login'])."' AND `user_pass` ='".$_POST['password']."'")){
        session_start();
        $_SESSION['name'] = $res[0]['user_name'];
        $_SESSION['img'] = $res[0]['user_img'];
        $_SESSION['phone'] = $res[0]['user_phone'];
        header("Location: /");
    }else{
        echo "<div class='red'>Login is incorrect!</div>";
    }



}


require_once('header.php');
?>


<div class="content m0">
    <div class="container">
        <div class="content-container d-block">
            <div class="log_in-container">
                <form class="log_in-form" action="login.php" method="post">
                    <label for="login">Input your login:</label>
                    <input type="text" name="login" value="" id="login">
                    <label for="password">Input your password:</label>
                    <input type="password" name="password" value="" id="password">
                    <input type="submit" id="submit-login" name="submit-login" value="Log in">
                </form>
            </div>
        </div>
    </div>
</div>
<?php
require_once('footer.php');
?>
