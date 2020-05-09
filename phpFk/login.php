<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>

<div class="katrori">
    <img src="foto/useri.png" class="useri">
    <h1>Hyrja</h1>
<form method="post" action="login.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
        <p>Email</p>
        <input type="email" name="email" required="" id="em" placeholder="Shkruaj Email" >

        <p>Password</p>
        <input type="password" name="password" required="" id="pasi" placeholder="Shkruaj Fjalëkalimin">

        <button type="submit" class="btn" name="login_user">Login</button>
        <a href="register.php" id="acc">Nuk keni account?</a>

    </div>

</form>
</div>
</body>
</html>
