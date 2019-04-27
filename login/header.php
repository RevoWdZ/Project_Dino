<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="login-style.css">
    <title></title>
</head>

<body>
    <header>
        <nav>
            <a class="logo" href="#">
                <img src="../img/640px-HSV-Logo.png" alt="logo">
            </a>
            <div class="login">
                <?php
                if (isset($_SESSION['userId'])) {
                    echo '<form action="includes/logout.inc.php" method="post">
                    <button class="login_out-button" type="submit" name="logout-submit">Logout</button>
                </form>';
                } else {
                    echo '<form action="includes/login.inc.php" method="post">
                    <input type="text" name="mailuid" placeholder="Username/E-mail"><br>
                    <input type="password" name="pwd" placeholder="Password"><br>
                    <button class="login_out-button" type="submit" name="login-submit">Login</button><br>
                </form>
                <a href="signup.php">SignUp</a>';
                }
                ?>
            </div>
        </nav>

    </header>