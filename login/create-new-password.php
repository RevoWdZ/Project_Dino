<html>
<link rel="stylesheet" type="text/css" media="screen" href="../css/registry.css">

<body>
    <main>
        <div class="imgcontainer">
            <h1>Zresetuj swoje hasło</h1>
            <h3>Na e-mail wyślemy wiadomość jak zresetować hasło</h3>
            <img src="../img/640px-HSV-Logo.png" alt="Avatar" class="avatar">
        </div>

        <?php
        $selector = $_GET["selector"];
        $validator = $_GET["validator"];

        if (empty($selector) || empty($validator)) {
            echo "Blad wyjebalo i siema nara! Jakbym postawil na serwerze to by dzialalo.ELO POZDRO 600";
        } else {
            if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
                ?>

                <div class="register-container">
                    <form action="includes/reset-password.inc.php" method="post">
                        <input type="hidden" name="selector" value="<?php echo $selector?>">
                        <input type="hidden" name="validator" value="<?php echo $validator?>">
                        <input type="password" name="pwd" placeholder="Wpisz nowe hasło...">
                        <input type="password" name="pwd-repeat" placeholder="Powtórz nowe hasło...">
                        <button type="submit" name="reset-password-submit">Zresetuj hasło</button>
                    </form>

                </div>


            <?php
        }
    }
    ?>

    </main>
</body>

</html>