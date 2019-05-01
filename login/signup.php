<html>
<link rel="stylesheet" type="text/css" media="screen" href="../css/registry.css">

<body>
    <main>
        <div class="imgcontainer">
            <h1>Dołącz do HSV !</h1>
            <img src="../img/640px-HSV-Logo.png" alt="Avatar" class="avatar">
        </div>

        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyfields") {
                echo '<p class="signuperror">Uzupełnij wszystkie pola!</p>';
            } else if ($_GET["error"] == "invalidmailuid") {
                echo '<p class="signuperror">Uzupełnij wszystkie pola!</p>';
            } else if ($_GET["error"] == "invaliduid") {
                echo '<p class="signuperror">Nieprawidłowa nazwa użytkownika!</p>';
            } else if ($_GET["error"] == "invalidmail") {
                echo '<p class="signuperror">Nieprawidłowy E-Mail!</p>';
            } else if ($_GET["error"] == "passwordcheck") {
                echo '<p class="signuperror">Hasła nie pasują do siebie!</p>';
            } else if ($_GET["error"] == "usertaken") {
                echo '<p class="signuperror">Nazwa użytkownika jest już zajęta!</p>';
            }
        } else {
            if (isset($_GET["signup"])) {
                if ($_GET["signup"] == "success") {
                    echo '<p class="signuperror" style="color:#00ff00;">Rejestracja przebiegła pomyślnie!</p>';
                }
            }
        }
        ?>
        <div class="register-container">
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="Nazwa Użytkownika">
                <input type="text" name="mail" placeholder="E-Mail">
                <input type="password" name="pwd" placeholder="Hasło">
                <input type="password" name="pwd-repeat" placeholder="Powtórz hasło"><br>
                <button type="submit" name="signup-submit">Zarejestruj się</button>
            </form>
        </div>
    </main>
</body>

</html>