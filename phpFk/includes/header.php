<?php

session_start();

if (!isset($_SESSION['email'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: login.php");
}
?>

<header >
    <link rel="stylesheet" type="text/css" href="reset.css">

    <div id="header" style="font-size:17px;color: white;margin-right: 15px;margin-left: 15px;">
        <?php  if (isset($_SESSION['name'])) : ?>
        <ul id="headerul">
            <li><p><?php $today = date("F j, Y");
                    echo $today;
                    ?></p></li>
            <li><p>Welcome<strong> <?php
                        $stringemri= implode(',' ,$_SESSION['name']);
                        echo  ucfirst($stringemri);
                        ?></strong></p></li>
            <li><p> <a href="login.php?logout='1'" style="color: lightblue;">logout</a> </p></li>
            <?php endif ?>
        </ul>
    </div>
    <div>
</header>