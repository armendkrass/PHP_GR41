 <!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="kon.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script src="jquery-1.11.2.min.js"></script>
<script>
$(function(){

  $("#fsh").click(function(){
    $("#zr").fadeOut(3500);
    $("#flm").fadeOut(3500);
  });

 
});
</script>
<script>
	 $(document).ready(function(){
  $("#qw").click(function(){
  	$("#field").slideToggle();
  	$("#qw").text("Kliko për ta shfaqur formularin !");
  	 	
  });
  });
</script>
<script>
	$(function(){

  $("#shfa").click(function(){
    $("#zr").fadeIn("slow");
    $("#flm").fadeIn("slow");
  });

});
</script>
<script>
	$(document).ready(function(){
	  $("#linku").click(function(){
    alert($("#gm").attr("href"));
  });
	});
</script>
<script>
		$(function(){

  $("#mifshi").click(function(){
    $("#ikon").hide();
    
  });

});
</script>
<script>
			$(function(){

  $("#mikthy").click(function(){
    $("#ikon").show();
    
  });

});
</script>
<script type="text/javascript">
      function kqyr(){
      
        var name=document.getElementById('emri').value;
        var telephone=document.getElementById('telefoni').value;
        var email=document.getElementById('emaili').value;
        var subject=document.getElementById('sb').value;
        var message=document.getElementById('mess').value;

        

        if(name == ""){
          document.getElementById('mbushemrin').innerHTML="* Shkruani emrin";
          document.getElementById('emri').focus();
          return false;
        }
        else{
          document.getElementById('mbushemrin').innerHTML="";
          document.getElementById('telefoni').focus();
        }

          if(telephone == ""){
          document.getElementById('mbushnumrin').innerHTML="* Shkruani numrin e telefonit";
          return false;
        }
        else{
          document.getElementById('mbushnumrin').innerHTML="";
          document.getElementById('emaili').focus();}
         
          if(email == ""){
          document.getElementById('mbushemail').innerHTML="* Shkruani E-mailin";
          return false;
        }
        else{
          document.getElementById('mbushemail').innerHTML="";
          document.getElementById('sb').focus();
        }
          if(subject == ""){
          document.getElementById('mbushsubjektin').innerHTML="* Shkruani subjektin";
          return false;
        }
        else{
          document.getElementById('mbushsubjektin').innerHTML="";
          document.getElementById('mess').focus();
        }
          if(message == ""){
          document.getElementById('mbushmessazhin').innerHTML="* Shkruani mesazhin";
          return false;
        }
        else{
          document.getElementById('mbushmessazhin').innerHTML="";
          

        }

      
        $("#forma")[0].reset();
      }
      function ruaj(){
        var nameInput=document.getElementById('emri').value;
        var telephoneInput=document.getElementById('telefoni').value;
        var emailInput=document.getElementById('emaili').value;
        var subjectInput=document.getElementById('sb').value;
        var messageInput=document.getElementById('mess').value;


        localStorage.setItem('text', nameInput);
        localStorage.setItem('text', telephoneInput);
        localStorage.setItem('text', emailInput);
        localStorage.setItem('text', subjectInput);
        localStorage.setItem('text', messageInput);

      }
      </script>

<div class="menu-bar" id="menu-bar">

<ul>
  <li  class="hyrje"><a href="home.html" class="hyrje">Home</a></li>
  
  <li><a href="karriera.html" class="hyrje">Kariera</a></li>
  <li class="active"><a href="kontakti.html" class="">Kontakti</a></li>
      <li><a href="galeria.html" class="hyrje">Galeria</a></li>

  <li><a href="" class="hyrje">DropDown</a>
<div class="sub-menu-1">
  <ul>
<li><a href="" class="hyrje">DropDown1</a></li>
<li><a href="" class="hyrje">DropDown2</a></li>
  </ul>
</div>
  </li>
  </ul>
</div>

</head>
<body>
<button onclick="topFunction()" id="myBtn" title="Go to top">TOP</button>
<script>
///funksioni me marr butonin 
var mybutton = document.getElementById("myBtn");

// kur shkon ma shum se 210 px me shfaq butonin
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 210 || document.documentElement.scrollTop > 210) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// kur e klikon butonin me shku nalt
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
};




</script>
<div class="background">
	
	<div class="map">
		<a href="https://www.google.com/maps/place/Universiteti+i+Prishtin%C3%ABs/@42.6479671,21.1670605,15.96z/data=!4m5!3m4!1s0x13549ec1b5430613:0x76c9353194f18686!8m2!3d42.6484074!4d21.1671326">
			<img src="foto/pr.png" width="400" height="300">
		</a> 
</div>
<div class="text">
	<h1>Si të na kontaktoni :</h1>
	    		<strong>
    		Universiteti i Prishtinës
    		</strong><br>
    		<address>
    			Rr.Agim Ramadani <br>Prishtinë<br>
    		</address>
    		<p>Tel.: +383(0)45 123 456
    			<br>
    			Fax: +383(0)38 123 456
    			<br>
    			E-mail:<a class="email" href="https://accounts.google.com/signup/v2/webcreateaccount?service=mail&continue=https%3A%2F%2Fmail.google.com%2Fmail&hl=en-GB&dsh=S1158375489%3A1577471946304138&gmb=exp&biz=false&flowName=GlifWebSignIn&flowEntry=SignUp" id="gm">up@gmail.com</a>
    		</p>
    		<button id="linku">Trego atributin</button>



</div>
<div class="mid">
    		<br>

    		<div class="vija" style="">
        ______________________________________</div>

<div class="rrjetet">Rrjetet tona sociale</div>
<div class="ikonat" id="ikon" >
	<a href="https://www.instagram.com/" >
    				<img src="foto/instagram.png" width="45px" height="45px" hspace="10" >
    			</a>
    			
    			<a href="https://www.facebook.com/" target="_blank" >
    				<img src="foto/facebook.png" width="45px" height="45px" hspace="10" >
    			</a>
    			<a href="https://www.twitter.com">
    				<img src="foto/twitter.png" width="45px" height="45px" hspace="10" >
    			</a>
    			<a href="https://www.linkedin.com/"  >
    				<img src="foto/linkedin.png"width="45px" height="45px" hspace="10" >
</a>

</div>
<button id="mifshi">Fshehi ikonat</button>
<button id="mikthy">Shfaqi ikonat</button>
</div>
</div>
<div class="jv" id="qw">Kliko për të fshehur formularin! </div>
<fieldset style="margin:none;" id="field">
	<form id="forma" action="#" onsubmit="return kqyr()" >
		<div class="majt">
			<h1>Na dërgoni një mesazh :</h1>
			<label>Emri</label><br>
			<input type="text" id="emri" placeholder="Shkruani emrin " autocomplete="off"><br>
       <span id="mbushemrin"></span><br>
			<label>Numri Tel.</label><br>
			<input type="text" id="telefoni" placeholder="Shkruani numrin e telefonit" autocomplete="off"><br>
			    <span id="mbushnumrin"></span><br>
      <label>E-mail</label><br>
			<input type="text" id="emaili" placeholder="Shkruani E-mailin" autocomplete="off"><br>
      <span id="mbushemail"></span><br>
			<label>Subjekti</label><br>
			<input type="text" id="sb" placeholder="Shkruani subjektin" autocomplete="off"><br>
      <span id="mbushsubjektin"></span><br>
			<label>Mesazhi</label><br>
			<textarea type="text" id="mess" rows="5" placeholder="Shkruani mesazhin" autocomplete="off"></textarea><br>
      <span id="mbushmessazhin"></span><br>
			<button type="submit" onclick="ruaj()" name="dergo">Dërgo</button>
<canvas id="mycanvas" width="100" height="70" 
style="border:3px solid #c3c3c3; float: right;">
Canvas nuk perkrahet nga browseri juaj.
</canvas>  
<script>

    var c = document.getElementById("mycanvas");
    var ctx = c.getContext("2d");
 
    ctx.font = "Arial 5px";
    ctx.fillStyle ="#FFEEFF";
    ctx.color = "black";
    ctx.moveTo(0,0);
    ctx.lineTo(50,25);  
    ctx.lineTo(100,0); 
    ctx.stroke(); 
    ctx.strokeText("To: UP",5,40);
    ctx.strokeText("Bregu i Diellit",5,50);
    ctx.strokeText("10000 Prishtine p.n.",5,60);
    //ctx.arc()
</script>
		</div>
	</form>
	<div class="djatht">
		<h2 id="flm">Faleminderit për mesazhin ! </h2>
		</div>

	<div class="djatht2" >
		<img src="foto/zarf.png" class="zarfi" id="zr">
		<button id="fsh" name="fshih">Fsheh animacionet</button>


	</div>
	<div class="djatht3">
		<button id="shfa" name="shfaq">Shfaq animacionet</button>
	</div>
	
</fieldset>
<?php include('C:\xampp\htdocs\INT19_20_GR13-master\includes\footer.php')?>


</body>
</html>