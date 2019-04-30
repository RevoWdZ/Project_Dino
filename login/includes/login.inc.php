<?php
if (isset($_POST['login-submit'])) {
    require 'dbhl.inc.php';
    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];

    if (empty($mailuid) || empty($password)) {
        header("Location: http://localhost/Project_Dino?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE user_name=? OR emailUsers=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: http://localhost/Project_Dino?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['password']);
                if ($pwdCheck == false) {
                    header("Location: http://localhost/Project_Dino?error=wrongpassword");
                    exit();
                } else if ($pwdCheck == true) {
                    session_start();
                    $_SESSION['userId'] = $row['user_id'];
                    $_SESSION['userUid'] = $row['user_name'];
                    header("Location: ../loggedIndex.php?login=succes");
                    exit();
                } else {
                    header("Location: .http://localhost/Project_Dino?error=wrongpwd");
                    exit();
                }
            } else {
                header("Location: http://localhost/Project_Dino?error=nouser");
                exit();
            }
        }
    }
} else {
    header("Location: http://localhost/Project_Dino");
    exit();
}
