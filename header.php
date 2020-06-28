<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<header class="header">
    <div class="header-top_bar">
        <div class="container">
            <div class="header-top_bar_wrapper">
                <div class="logo ">
                    <div class="logo-text"><a href="/">Kr</a></div>
                </div>
                <div class="menu flex-1">
                    <div class="menu-container">
                        <div class="menu-bar">
                            <div class="menu-item upper"><a href="/">Home</a></div>
                            <div class="menu-item upper"><a href="/developers.php">Developers</a></div>
                            <div class="menu-item upper"><a href="/portfolio">Portfolio</a></div>
                            <div class="menu-item upper"><a href="/contact">Contact</a></div>
                        </div>
                    </div>
                </div>
                <div class="social">
                    <div class="social-container">
                        <div class="social-item"><a href="#" class="img-social"
                                                    style="background-image: url('assets/img/facebook.png')"></a></div>
                        <div class="social-item"><a href="#" class="img-social"
                                                    style="background-image: url('assets/img/twitter.png')"></a></div>
                        <div class="social-item"><a href="#" class="img-social"
                                                    style="background-image: url('assets/img/linkedin.png')"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="phrase">
        <div class="container">
            <div class="phrase-text"><p class="upper">Hi there, i am a Web/UI/ux Designer & Developer </p>

                <div class="authorize">
                    <?php if ($_SESSION['name']): ?>
                         <div class="logout">
                             <a href="/logout.php">Log out</a>
                         </div>

                    <?php else: ?>
                        <div class="log_in authorize-item"><a href="/login.php">Log In</a></div>
                        <div class="sign_up authorize-item"><a href="/sign_up.php"> Sign Up</a></div>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>
</header>