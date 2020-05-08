<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="peremail.css">
	<script type="text/javascript">
		function plotsimihapsirav(){
			var em=document.getElementById('idija').value;
			var pass=document.getElementById('emal').value;

			  if(em.length === 0 && pass.length !== 0){
               alert('Shkruani emrin e Përdoruesit');
               return;
           }
           else if(pass.length === 0 && em.length !==0 ){
               alert('Shkruani Email');
               return;
           }
           else if(pass.length === 0 && em.length ===0){
              alert('Plotësoni të dhënat që kërkohen');
               return;
           }
       }
		
	</script>
	<script>
	function validateForm()
{
var x=document.forms["myForm"]["email1"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<0 || dotpos<atpos+1 || dotpos+1>=x.length)
  {
  alert("Nuk eshte e-mail adrese valide");
  return false;
  }
}
</script>
</head>
<body>
<div class="katrori">
	<img src="foto/useri.png" class="useri">
<h1>Keni harruar fjalëkalimin?</h1>
<div class="minikatrori">
	<h2>Në rast se keni harruar fjalëkalimin për qasje në OPEN UNIVERSITY, shënoni numrin tuaj te id kartelës, ose perdoruesin, si dhe email adresën me të cilën jeni regjistruar në OPEN UNIVERSITY, shtypni butonin 'Dërgo kërkesën' dhe linku për ri-vendosjen e fjalëkalimit të ri do t'ju dërgohet përmes email-it.  </h2>
</div><br>
<form name="myForm" onsubmit="return validateForm()">
	<p>Përdoruesi</p>
	<input type="text" name="" required="" id="idija"  placeholder="Shkruaj Përdoruesin">
<p>Email Adresa</p>
<input type="text" name="email1" id="emal" placeholder="Shkruaj Email">
<input type="submit" onclick="plotsimihapsirav()" name=""   value="Dërgo ">
</br>




</form>


</div>
</body>
</html>