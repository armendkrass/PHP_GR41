<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>

<div class="katrori">
    <img src="foto/useri.png" class="useri">
    <h1>Regjistrohu</h1>
<form method="post" action="register.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
        <p>Emri</p>
        <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Shkruaj Emrin">
        <p>Mbiemri</p>
        <input type="text" name="surname" value="<?php echo $surname; ?>" required="" id="idja" placeholder="Shkruaj Mbiemrin">
        <p>Email</p>
        <input type="email" name="email" value="<?php echo $email; ?> " placeholder="Shkruaj Email">
        <p>Password</p>
        <input type="password" name="password_1" required="" id="pasi" placeholder="Shkruaj Fjalkalimin">
        <p>Confirm Password</p>
        <input type="password" name="password_2" required="" id="pasi" placeholder="Konfirmo Fjalkalimin">

        <button type="submit" class="btn" name="reg_user">Finalizo</button>
        <a href="login.php">Already a user?</a>
    </div>

</form>
</div>
</body>
</html>