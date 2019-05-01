<html>
<link rel="stylesheet" type="text/css" media="screen" href="../css/registry.css">

<body>
    <main>
        <div class="imgcontainer">
            <h1>Zresetuj swoje hasło</h1>
            <h3>Na e-mail wyślemy wiadomość jak zresetować hasło</h3>
            <img src="../img/640px-HSV-Logo.png" alt="Avatar" class="avatar">
        </div>

        <div class="register-container">
            <form action="includes/reset-request.inc.php" method="post">
                <input type="text" name="email" placeholder="Wpisz tutaj swój adres e-mail...">
                <button type="submit" name="reset-request-submit">Zresetuj hasło</button>
            </form>
            <?php
            if (isset($_GET["reset"])) {
                if ($_GET["reset"] == "success") {
                    echo '<p class="signuperror" style="color:#00ff00;">Sprawdz swoja poczte!</p>';
                }
            }
            ?>
        </div>
    </main>
</body>

</html>