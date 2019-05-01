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

            if(empty($selector) || empty($validator) ){
                echo "Blad wyjebalo i siema nara!";
            }
            else{
                if(ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false){
                    ?>

                    


                    <?php
                }
            }
        ?>
        <div class="register-container">
            <form action="includes/reset-request.inc.php" method="post">
                <input type="text" name="email" placeholder="Wpisz tutaj swój adres e-mail...">
                <button type="submit" name="reset-request-submit">Zresetuj hasło</button>
            </form>
           
        </div>
    </main>
</body>

</html>