<?php
include ('server.php')
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="signup.css">
    <script type="text/javascript">
        function plotsimihapsirav(){
            var em=document.getElementById('idja').value;
            var pass=document.getElementById('pasi').value;

            if(pass.length === 0 && em.length ===0){
                alert('Plotësoni të dhënat që kërkohen');
            }
        }

    </script>
</head>
<body>
<div class="katrori">
    <img src="foto/useri.png" class="useri">
    <h1>Regjistrohu</h1>
    <form  action="signup.php" method="post">
        <p>Emri</p>
        <input type="text" name="name" required="" id="idja" placeholder="Shkruaj Emrin">
        <p>Mbiemri</p>
        <input type="text" name="surname" required="" id="idja" placeholder="Shkruaj Mbiemrin">
        <p>Email</p>
        <input type="email" name="email" required="" id="pasi" placeholder="Shkruaj Email">
        <p>Password</p>
        <input type="password" name="password_1" required="" id="pasi" placeholder="Shkruaj Fjalkalimin">
        <p>Confirm Password</p>
        <input type="password" name="password_2" required="" id="pasi" placeholder="Konfirmo Fjalkalimin">

        <button type="submit" name="btnsignup" ">Finalizo</button>

        <a href="logini.php">Already a user?</a>

    </form>
</div>
</body>

</html>
