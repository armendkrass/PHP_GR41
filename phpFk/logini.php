<?php
include ('server.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="perlogin.css">
	<script type="text/javascript">
		function plotsimihapsirav(){
			var em=document.getElementById('idja').value;
			var pass=document.getElementById('pasi').value;

			  if(em.length === 0 && pass.length !== 0){
               alert('Shkruani emailin e Përdoruesit');
           }
           else if(pass.length === 0 && em.length !==0 ){
               alert('Shkruani Fjalëkalimin');
           }
           else if(pass.length === 0 && em.length ===0){
              alert('Plotësoni të dhënat që kërkohen');
           }
       }
		
	</script>
</head>
<body>
<div class="katrori">
	<img src="foto/useri.png" class="useri">
	<h1>Hyrja</h1>
	<form  action="logini.php" method="post">
		<p>Përdoruesi</p>
		<input type="email" name="loginemail" required="" id="em" placeholder="Shkruaj Email">
		<p>Fjalëkalimi</p>
		<input type="password" name="loginpassword" required="" id="pasi" placeholder="Shkruaj Fjalëkalimin">
		
		<button type="submit" name="btnlogin" onclick="plotsimihapsirav()">Kyqu</button>
		<br>
		<br>

        <a href="humbur.php">Keni harruar fjalëkalimin?</a>
        <br>
        <a href="signup.php">Nuk keni account?</a>

        </br>
	</form>
</div>
</body>

</html>