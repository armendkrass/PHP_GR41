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
	<form  action="home.html">
		<p>Përdoruesi</p>
		<input type="text" name="P" required="" id="idja" placeholder="Shkruaj Përdoruesin">
		<p>Fjalëkalimi</p>
		<input type="password" name="F" required="" id="pasi" placeholder="Shkruaj Fjalëkalimin">
		
		<button type="submit"  onclick="plotsimihapsirav()">Kyqu</button>
		<br>
		<br>


		<a href="humbur.html?">Keni harruar fjalëkalimin?</a>
	</br>
	</form>
</div>
</body>

</html>