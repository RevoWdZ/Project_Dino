<?php
require "header.php";
?>

<main>
    <h1>SignUp</h1>
    <form action="login/signup.inc.php" method="post">
    <input type="text" name="uid" placeholder="Username">
    <input type="text" name="mail" placeholder="E-Mail">
    <input type="password" name="pwd" placeholder="Password">
    <input type="password" name="pwd-repeat" placeholder="Repeat Password">
    <button type="submit" name="signup-submit">Signup</button>
</form>
</main>

<?php
require "footer.php";
?>