<?php include('header.php') ?>

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

</head>
<body>
<?php
include('nav.php')
?>
<button onclick="topFunction()" id="myBtn" title="Go to top">TOP</button>
<script>
var mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 210 || document.documentElement.scrollTop > 210) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

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

                <?php
                $address = "Agim Ramadani 40,10000 Prishtine,Kosove";
                $arr = preg_split('/\,/', $address);
                while (list($key, $value) = each ($arr))
                    echo "<br/>".$value;
                ?>
    		</address>

    <?php
    $number = array("Mobile"=>"+383(0)45 123 456", "Fix"=>"+383(0)38 123 456");
    echo "Tel.: " . $number['Mobile'] . " ";
    echo "<br>";
    echo "Fix:  : " . $number['Fix'] . " ";
    echo "<br>";
    ?>
    		<p>
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
<fieldset  id="field">
	<form id="forma" action="" name="form" method="post"  onsubmit="return kqyr()  " >
		<div class="majt">
			<h1 style="font-size: 30px;">Na dërgoni një mesazh :</h1>
            <br>
			<label for="name">Emri</label><br>
			<input type="text" id="emri" name="name" placeholder="Shkruani emrin " autocomplete="off"><br>
            <span id="mbushemrin"></span><br>
            <label for="subject">Tema</label><br>
            <input type="text" id="tema" name="subject" placeholder="Shkruani emrin " autocomplete="off"><br>
            <span id="mbushemrin"></span><br>

            <label for="email">E-mail</label><br>
			<input type="text" id="emaili" name="email" placeholder="Shkruani E-mailin" autocomplete="off"><br>
            <span id="mbushemail"></span><br>
            <label for="msg">Mesazhi</label><br>
			<textarea type="text" id="mess" name="msg" rows="5" placeholder="Shkruani mesazhin" autocomplete="off"></textarea><br>
            <span id="mbushmessazhin"></span><br>
			<button type="submit" name="submit" value="Send" onclick="ruaj()" name="submit">Dërgo</button>
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

<?php

try {


require('validate.php');

$mailobj = new Validation('kllik.kllek@gmail.com');
$to = $mailobj->getTo();
$mailobj->setSubject('Form Submission');
$subject = $mailobj->getSubject();

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];
    $message = "Name: " ."\n".trim(substr($name,0,15)). "\n" . "Subject: ".trim(substr($subject,0,15))."\n\n" . "Wrote the following: " . "\n" .trim(substr($msg,0,100));
    $messages = $mailobj->validateAndsendMailMessage($_POST['name'],$_POST['email'], $_POST['subject'], $message);

    echo "<script language='Javascript'>alert('{$messages[0]}');</script>";

}
} catch (Exception $exception) {
    echo "<p>Naj gabim kur e ka lexu email ka ndodh </p>";
}
?>




<?php include('includes\footer.php')?>


</body>
</html>