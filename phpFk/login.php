<?php
session_start();
require "lajmrim.php";

?>






<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<script type="text/javascript">
		function plotsimihapsirav(){
			var em=document.getElementById('idja').value;
			var pass=document.getElementById('pasi').value;

			  if(em.length === 0 && pass.length !== 0){
               alert('Shkruani emrin e Përdoruesit');
               return;
           }
           else if(pass.length === 0 && em.length !==0 ){
               alert('Shkruani Fjalëkalimin');
               return;
           }
           else if(pass.length === 0 && em.length ===0){
              alert('Plotësoni të dhënat që kërkohen');
               return;
           }
       }
		
	</script>
</head>
<body>
    
<div class="katrori">
	<img src="foto/useri.png" class="useri">
	<h1>Hyrja</h1>
	<form  action="login.php" method ="post" >
		<p>Përdoruesi</p>
		<input type="text" name="username" required="" id="idja" placeholder="Shkruaj Përdoruesin" class="form-control">
		<p>Fjalëkalimi</p>
		<input type="password" name="password" required="" id="pasi" placeholder="Shkruaj Fjalëkalimin" class="form-control">
		
		<button type="submit" name="loginsubmit"  onclick="plotsimihapsirav()">Kyqu</button>
		<br>
		<br>


		<a href="signup.php">Keni harruar fjalëkalimin?</a>
	</br>
	</form>
    <form action="logout.php" method ="post">
    <button type="submit" name="logoutsubmit"  >logout</button>
    </form>
    <form action="signup.php" method ="post">
    <button type="submit" name="signupsubmitL"  >signup</button>
    </form>
</div>
</body>

</html>