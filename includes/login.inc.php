<?php
if (isset($_POST['login-submit'])) {
    require 'dbh.inc.php';
    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];
    if (empty($mailuid) || empty($password)) {
        header("Location: ../landing.php?error=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT * FROM users WHERE uidUsers=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../landing.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['pwdUsers']);
                if ($pwdCheck == false) {
                    header("Location: ../landing.php?error=wrongpwd");
                    exit();
                }
                else if ($pwdCheck == true) {
                    session_start();

                    $_SESSION['userId'] = $row['idUsers'];
                    $_SESSION['userUid'] = $row['uidUsers'];
                    $_SESSION['loggedin'] = true;

                    header("Location: ../index.php?login=success");
                    exit();
                }
                else {
                    header("Location: ../landing.php?error=wrongpwd");
                    exit();
                }
            }
            else {
                header("Location: ../landing.php?error=nouser");
                exit();
            }
        }
    }
}
else {
    header("Location: ../landing.php");
    exit();
}