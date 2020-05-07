<?php

if (isset($_POST['loginsubmit'])) {

require 'databaseSignup.php';
$mailusername = $_POST['username'];
$passwordlogin = $_POST['password'];

if (empty($mailusername)|| empty($passwordlogin)) {
    header("Location : ../login.php?error=emptyfields");
    exit();
}
else{
    $sql = "SELECT * FROM users WHERE username=? OR emailUsers=? ";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("Location : ../login.php?=error=sqlerorr");
        exit();

    }else{
        mysqli_stmt_bind_param($stmt,"ss",$mailusername,$mailusername);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if ($row = msqli_fetch_accoc($result)) {
            $passcheck = password_verify($passwordlogin,$row['password']);

            if ($passcheck==false) {
                header("Location : ../login.php?=error=wrongpass");
                exit();

            }elseif ($passcheck==true) {
               session_start();
               $_SESSION['userid'] = $row['id'];
               $_SESSION['userName'] = $row['username']; 

               header("Location : ../login.php?login=succes");
               exit();
            }else {
                header("Location : ../login.php?=error=wrongpass");
                exit();
            }
        }else{
            header("Location : ../login.php?=error=nouser");
            exit();
        }


    }
}

}else{
    header("Location : ../login.php");
    exit();
}