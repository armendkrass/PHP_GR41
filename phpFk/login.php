<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="checkbox.css">
    <link rel="stylesheet" type="text/css" href="login.css">


</head>
<body>
<?php include('errors.php'); ?>
<div class="katrori">
    <img src="foto/useri.png" class="useri">
    <h1 >Hyrja</h1>
    <form method="post" action="login.php">
    <div class="input-group">


        <p>Email</p>
        <input type="email" name="email" required="" id="em" placeholder="Shkruaj Email" value="<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>" >
        <p>Password</p>
        <input type="password" name="password" required="" id="pasi" placeholder="Shkruaj Fjalëkalimin" >
        <label style="font-size: " class="container">Remember me
            <input type="checkbox"  name="remember" <?php if(isset($_COOKIE["email"])) { ?> checked <?php } ?> />
            <span class="checkmark"></span>
        </label>
        <a href="register.php" >Nuk keni account?</a>

        <button type="submit" class="btn" style="margin-left: 75px" name="login_user">Login</button>

    </div>

</form>
</div>
</body>
</html>
