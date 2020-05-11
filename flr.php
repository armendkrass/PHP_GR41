<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="stilizimi.css">
	<meta charset="utf-8">
	<title>Jeta studentore</title>
	<div class="menu-bar">
			<ul>
 				<li><a href="home.html" class="hyrje">Home</a></li>
  				<li ><a href="karriera.html" class="hyrje">Karriera</a></li>
  				<li><a href="kontakti.html" class="hyrje">Kontakti</a></li>
  				<li class="active" ><a href="" class="hyrje">Galeria</a></li>
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
		<link rel="stylesheet" href="css1.css" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="javascript.js"></script>


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
	  <div class="stili">
			<h3 style="color:#ccfff5;font-size:35px;text-align:center;">Fakultetet</h3>
			<div id="listat" style="border:dotted;">
			<ul>
				<li class="nn"><a href="https://mjekesia.uni-pr.edu/">Fakulteti i Mjeksis</a></li>
				<li class="nn"><a href="https://fiek.uni-pr.edu/">Fakulteti Teknik</a></li>
				<li class="nn"><a href="https://fbv.uni-pr.edu/">Fakulteti i Bujqesise</a></li>
				<li class="nn"><a href="https://fna.uni-pr.edu/">Fakulteti i Arkitektures</a></li>
				<li class="nn"><a href="https://filologjia.uni-pr.edu/">Fakulteti Filologjik</a></li>
				<li class="nn"><a href="http://filozofiku.uni-pr.edu/">Fakulteti Filozofik</a></li>
			</ul>
		</div>
	</div>
		<div class="jeta" style="height:850px;">
			<h2 style="color:#ccfff5;font-size:40px;text-align:center;">Jeta ne Prishtine</h2>
			<img class="ft" src="foto/pr.jpg" width="80%" height="500px" alt="Foto e Prishtines">
			<h3>Nje pamje e Prishtines afer biblotekes te universitetit te prishtines si dhe fakulteteve filologjik dhe filozofik</h3>
			<p><i>Miresevini ne universitetin e Prishtines.Në Universitetin e Prishtinës, këto ditë janë duke u mbajtur zgjedhjet për dekanë të fakulteteve të këtij universiteti. Dekanët e zgjedhur deri tani, janë si:Tahir Arbneshi është rizgjedhur dekan i Fakultetit të Shkencave Matematiko Natyrore, Lindita Rugova është zgjedhur dekane e Fakultetit të Filologjisë, Abdullah Zejnullahu është zgjedhur dekan në Fakultetin e Ndërtimtarisë dhe Arkitekturës dhe Suzana Manxhuka dekane e Fakultetit të Mjekësisë.Kurse dje janë zgjedhur edhe tre dekanë; But Dedaj dekan i Fakultetit Ekonomik, Bujar Dugolli dekan i Fakultetit Filozofik dhe Enver Hamiti dekan i Fakultetit të Inxhinierisë Elektrike.</i></p>
			<button></button>

</div>
<div class="jeta" style="height: 880px;">
	<h2 style="color:#ccfff5;font-size:35px;text-align:center;">Menza</h2>
	<img src="foto/menza.jpg"width="100%" height="700px" alt="Foto e Prishtines">
	<p><b>Universiteti i Prishtines</b>
		<i>Në menzën e studentëve punohet me dy ndërrime duke filluar nga ora 07:oo e mëngjesit e gjerë në orën 21:oo në mbrëmje.Koha e mëngjesit fillon në ora 10:oo gjerë në orën 15:oo ndërsa darka fillon nga ora 17:oo deri në ora 21:oo. Kuzhina jonë ofron një meny me ushqim cilësor i pasur me vlera ushqyese.Gjatë një ndërrimi shërbehen deri në 7 lloje të gjellërave të ndryshme të përcjellura me deserte,pemë e lëngje të ndryshme për studentët të cilët ushqehen në mezën e QS-së.Numri i studentëve që ushqehen në kuzhinën tonë sillet reth 4000 ndërsa brenda ditës shërbehen mbi 7000 shujta.</i></p>
	</p>
</div>
<div class="jeta" style="height: 450px;">
	<div class="une">
		<p><strong></strong></p>
		Emri:<br>
		<input  style="margin-bottom:20px;"type="text" name="emri" placeholder="enter your name">
		<br>
		Mbiemri<br>
		<input type="text" name="mbiemri" placeholder="enter your lastname">
		<form>
		<h4>A ju pelqen ky Universtiet?</h4>
		<input type="checkbox" name="po_jo" checked>po</input>
		<input type="checkbox" name="po_jo">jo</input>
	</form>
		<br>
		<h4>Si ju duket Universiteti?</h4>
		<textarea style="border-radius:15px" rows="6" cols="60"></textarea>
		<h3>Per me shume informacione vizitoni faqen tone</h3>
		<span><button class="alushi" onclick="window.location.href='https://www.facebook.com/UniversitetiPrishtines/';">Facebook.com</button></span>
	</div>
</div>
<hr>
<div class="bllablla">

Njoftim

Njoftohen studentët banues në konvikte se më datën 25, 26 dhe 27 nëntor 2019 në kuadër të aktiviteteve për parandalimin e HIV-AIDS me rastin e 1 dhjetorit Ditës Ndërkombëtare do të mbahet Ligjeratë kundër HIV- AIDS në ambientet e konvikteve.

Ligjerata fillon nga ora 12:00, ligjeruese e këtij aktiviteti është doktoresha Dr. Fitnete Statovci.

Më daten 25 nëntor mbahet në sallen e konviktit nr 6
Ndërsa me datën 26 nëntor mbahet në sallen e konviktin nr 7 Si dhe me datën 27 nëntor në konviktin nr 3

Ftoheni të merrni pjesë .
Qendra e Studentëve Prishtinë
</div>
<hr style="background-color:rgb(141, 70, 25);height: 2px;width: 70%;">
<div style="margin-left:10em;">
	<h2>Universiteti i Prishtines ka:</h2>
	<hr style="background-color:rgb(141, 70, 25);height: 2px;width: 50%;">
	<ol style="margin-left:-2em;">
	
	<ul style="list-style-type:square;">
		<ul>
	<?php
$stringu="Bibloteka,Literature nderkombetare, Organizim te instutucioneve, Hapersire parku, Qender te Studenteve";
$newarray=explode(',', $stringu);
?>
<?php foreach ($newarray as $valueu) {?>
	<li><?php echo $valueu.'</br>';?></li>
<?php } ?>
</ul>
	
</ul>
</ol>
</div>
	<div style="margin-left:35em;margin-top:-8em;">
		<h2>Mundesia e studimit ne Universitete Amerikane</h2>
		<dl>
			<dt>West Chester</dt>
			<dd>  M.S.Criminal Justice</dd>
			<dt>Washington</dt>
			<dd>  Finance</dd>
			<dt>Oxford</dt>
			<dd>  M.S.Social Work</dd>
			<dt>New York</dt>
			<dd>  M.S.Managment</dd>
			<dt>Chicago</dt>
			<dd>  M.S.Nursing</dd>
</dl>
</div>
<hr style="background-color:rgb(141, 70, 25);height: 2px;width: 70%;">
 <footer>
     <p id="copyright" style="padding-left: 30px; background-color:#1f1f1f;">Copyright &copy; 2019 - All Rights Reserved - Domain Name </p>
   </footer>
   <?php
echo "Scripta po ekzekutohet ne filen " .$_SERVER['PHP_SELF'];
echo "<br>";
echo "Emri i host_serverit eshte: ". $_SERVER['SERVER_NAME'];
echo "<br>";
echo "Hosti i headerit prej kerkeses momentale eshte: ".$_SERVER['HTTP_HOST'];
echo "<br>";

echo "<br>";
echo "Permbajtja e webrowserit ekzekutues".$_SERVER['HTTP_USER_AGENT'];
echo "<br>";

?>
</body>
</html>
