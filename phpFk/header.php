<?php

session_start();

if (!isset($_SESSION['email'])) {
    header('location: login.php?=login/first');
}
if (isset($_GET['logout'])) {
    unset($_SESSION['email']);
    session_unset();
    session_destroy();
    header("location: login.php");
}
?>

<header >
    <link rel="stylesheet" type="text/css" href="reset.css">
    <div id="header"  style="font-size:17px;color: white;margin-right: 20px;margin-left: 20px;">
        <?php  if (isset($_SESSION['name'])) : ?>
        <ul id="headerul">


            <li><p><?php $today = date("F j, Y");
                    echo $today;
                    ?></p></li>
            <li><p>Welcome<strong> <?php
                        $stringemri= implode(',' ,$_SESSION['name']);
                        echo  ucfirst($stringemri);
                        ?></strong></p></li>
            <li><p> <a href="login.php?logout='1'" name="logout" style="color: lightblue;">logout</a> </p></li>
            <?php endif ?>
        </ul>
    </div>
    <div>
</header>

