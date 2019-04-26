<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title></title>
</head>

<body>
    <header>
        <nav>
            <a href="#">
                <img src="./img/640px-HSV-Logo.png" alt="logo">
            </a>
            <div>
                <form action="login/login.inc.php" method="post">
                    <input type="text" name="mailuid" placeholder="Username/E-mail">
                    <input type="password" name="pwd" placeholder="Password">
                    <button type="submit" name="login-submit">Login</button>
                </form>
                <a href="login/signup.php">SignUp</a>
                <form action="login/logout.inc.php" method="post">
                    <button type="submit" name="logout-submit">Logout</button>
                </form>

            </div>
        </nav>

    </header>
