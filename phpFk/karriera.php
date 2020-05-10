<?php
include ('includes/header.php')
?>
<!DOCTYPE html>
<html>
	<head lang="en">
		<meta charset="utf-8">
		<title>
			Karriera
		</title>

        <?php
        include ('includes/nav.php')
        ?>


        <link rel="stylesheet" href="css1.css" />
		<link rel="stylesheet" type="text/css" href="StilizimiCss.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="javascript.js"></script>
	</head>
	<body>

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
			<script>
				$(function(){
				$(".ffade").animate({ opacity: 1 }, 2600);
	  				});
	 		</script>
		
		<section>
			<style> 
           
           @font-face
           {
               font-family: fontiJone;
           }
            
           h1 , .ora
            {
               font-family: fontiJone;
			}
        </style>
			<hr >
			 <table style="width:100%">
 		 <tr class="ffade">
    	<th>82 % e te diplomuarve jane te punesuar momentalisht</th>
    	<th>87 % jane te punesuar ne pozita tte lidhura ngushte me studimet e tyre</th>
    	<th>97 % te Studenteve e rekomandojne Kolegjin tone tek te tjeret</th>
    	<th>48% te te diplomuarve kane vazhduar studimet master ne kolegjin tone</th>
  	</tr>
  </table>
		</section>

		<div>
			<span>
				<table style="width:100%" class="tabela1">
					<tr>
						<th>
			<img src="foto/foto1.jpg"><p>Në përputhje me rekomandimet e strategjisë së re për orientim në karrierë </br>e hartuar nga Ministria e Arsimit  
			Shkencës dhe Teknologjisë, si dhe bazuar në</br> planin aksional
			 vjetor Zyra e Karrierës është funksionalizuar tërësisht në 
			  vitin 2015 </br>me stafin e saj të trajnuar në mënyrë profesionale  
			në kuadër të projektit të  </br>Komisionit Evropian EUFORIA 
			 (Entrepreneurial Universities for Industry Alliances.</p>
						</th>

						<th>
					<h2>Orari i Sesioneve per keshillim</h2>

							<ul>
									<li>
										Si të përgatisim një CV të targetuar?</br>
                    					Çdo të hënë 10.00-12.00 
									</li>
									<li>
										Si të përgatisim një Letër Motivimi?</br>
										Çdo të martë 10.00-12.00
									</li>
									<li>
										Zhvillimi i shkathtësive për intervistë të punës</br>
										Çdo të mëkurë 10.00-12.00
									</li>
									<li>
										Përgatitja e dosjes së aplikimit për bursa studimore</br>
										Çdo të premte 10.00-12.00
									</li>
										</ul>

                                        <ul>
                                         <?php $data = "23 janar 2020,02:00,Shkelzen Gashi";
                                        $koha=explode("," , $data);?>
                                            <li><?php echo "Autor: ",$koha[2]?></li>
                                            <li><?php echo "Data: ",$koha[0]?></li>
                                            <li><?php echo "Ora: ",$koha[1]?></li>


                                        </ul>


						</th>
					</tr>
				</table>
			</span>
		</div>
		<hr style="margin-top:0 ;margin-bottom:0">
		<div class="area">
			<h3>Lajmet nga karriera</h3>
			<div>
				<table style="width:100%" class="tabela3">
					<tr>
						<th class="hapsira">
							<div class="wrapper">
							<img src="foto/foto2.jpg" width="250px" height="250px" class="fotoborder" />
                			 <div class="overlay">
                                 <div class="content">
                                   <a href="">Apply</a>
                                 </div>
                               </div>
                           </div>
                			<a style="text-decoration: none;"href="Aplikimet per Bursa"><p>Aplikimi per Bursa</p>
                   		
                			</a>
                			</th>
                			<th class="hapsira">
                				<div class="wrapper">
                			<img src="foto/foto3.jpg" width="250px" height="250px" class="fotoborder" />
                			 <div class="overlay">
                                   <div class="content">
                                     <a href="">Apply</a>
                                   </div>
                                 </div>
                               </div>
                			<a style="text-decoration: none;"href="Aplikimi per Regjistrim"><p>Aplikimi per Regjistrim</p>
                    
                			</a>
            			</th>
            			<th class="hapsira">
            				<div class="wrapper">
                			<img src="foto/foto4.jpg" width="250" height="250px" class="fotoborder"/>
                			 <div class="overlay">
                                  <div class="content">
                                    <a href="">Read more</a>
                                  </div>
                                </div>
                              </div>
                			<a style="text-decoration: none;" href="Radhitja e Fakultetit tone ne ranglistat boterore!"><p>Radhitja e fakultetit tone ne ranglistat boterore!</p>
                    		</a>
               			</th>
            	</table>
            </div>
		</div>
		<hr style="margin-top:0 ; margin-bottom:0">
		<div class="area1">
			<table style="width: 100%" class="tabela">
				<tr>
					<th>
						<h4>Sherbimi i Studenteve, Keshillimi Individual</h4>
					
						<ul>
							<li>
								Ofrimin e sesioneve këshilluese për studentët për zgjedhjet e tyre profesionale në karrierë dhe arsimim;
							</li>
							<li>
								Hartimi i planeve për punësim dhe trajnim, arsimim dhe gjetja e mënyrave të financimit me të cilat ata arrijnë këto qëllime;
							</li>
							<li>
								Hulumtimi i alternativave për zgjedhjet e tyre në karrierë dhe lehtësimi në procesin e lidhjes për mbështetjen dhe këshillimin për organizatat që mund të kenë burime potenciale për kurse e trajnime dhe kualifikime relevante;
							</li>
							<li>
								Ofrimi i mbështetjes si dhe sesioneve individuale për përgatijen e CV-ve, Portfolios për aplikacionin e punës, trajnimi për teknikat e intervistimit;
							</li>

							
							
						</ul>
					</th>
					<th>
						<h5>Zyra e karrieres se Open University mbeshtetet ne:</h5>
					<ul>

						<li>
							Identifikimin e mungesës së shkathtësive dhe ballafaqimi me to
						</li>
						<li>
							Bashkëbisedimi me studentët për zgjedhjet e tyre në karrierë ose arsimim
						</li>
						<li>
							Bashkëbisedimi me studentët për zgjedhjet e tyre në karrierë ose arsimim
						</li>
						<li>
							Ndërtimi i aksion planeve për punësimin, trajnimin, arsimimin e tyre dhe gjetja e mënyrave se si ata t’i arrijnë këto objektiva.
						</li>
						<li>
							Hulumtimin e alternativave për zgjedhjet e tyre të karrierës dhe ndërlidhja e tyre me organizatat mbështetëse e këshilldhënëse si dhe këshillimi i studentëve në lidhje me burimet potenciale të kurseve e trajnimeve ose kualifikimeve relevante dhe gjetja e fondeve në dispozicion
						</li>
						
					</ul>

				</tr>
			</table>
		</div>
	</body>
	<hr style="margin-top:0 ; margin-bottom:0">
	<div>
		
		<table style="width: 100%" class="tabela2" >
			<tr>
				<th>
					<h6 class="area2">Eventet e Karrieres!</h6></br>
					Duke parë rëndësinë e shkathtësive praktike dhe kërkesave të tregut të punës, Zyra e Karrierës rregullisht organizon vizita industriale studimore tek rrjeti i kompanive partnere përbërë nga kompanitë prodhuese, korporatat dhe bizneset.</br>

					Financuar nga projekti EUFORIA, shpalljet për programet e praktikave për studentë bëhen në mënyrë tërësisht të digjitalizuar falë softuerit të lansuar së fundi i cili bashkon tre akterët kryesorë (Studentët, rrjetin e bizneseve partnere dhe Zyrtarin e Karrierës) për realizimin e suksesshëm të praktikave në kohë reale 

					E-Praktika

					Ndërkaq, vendosja e studentëve në praktikë bëhet në disa segmente: Në kuadër të plan-programeve mësimore të lëndëve, në baza vullnetare si dhe si obligim kontraktual i studentëve me bursa meritore studimet e të cilëve financohen nga Universiteti ynë dhe bizneset.
				</th>
				<th>
						<img src="foto/foto5.jpg" width="650" height="380px"/>
						<a href="foto/foto5.jpg" width="650" height="380"> </a>
							
							<div class="data"> September </div>
							<div class="data1"> 25 <p class="ora"> 9:00 am to 5:00 pm</p></div>

				</th>
			</tr>
            <tr>
                <td>
                    <hr>
                    <span style="color: wheat; font-size: 28px; "> BEFORE YOU LEAVE READ THESE FUNNY SENTENCES </span>  <br>
                    <hr>

                    <?php

                    $text1 = " <h3 style='float: left; '> I was _VERBB_ in the _PLACE_ when I found a _NOUN_.<br>
                                Then I had to go to the _PLACE_.</h3>";
                    $text = str_replace('_VERBB_','_VERB_',$text1);

                    $verbs = explode("\n", file_get_contents("words.verbs.txt"));
                    $places = explode("\n", file_get_contents("words.places.txt"));
                    $nouns = explode("\n", file_get_contents("words.nouns.txt"));

                    while (preg_match("/(_VERB_)|(_PLACE_)|(_NOUN_)/", $text, $matches)) {
                        switch ($matches[0]) {
                            case '_VERB_' :
                                shuffle($verbs);
                                $text = preg_replace(',' . $matches[0] . ',', current($verbs), $text, 1);
                                break;
                            case '_PLACE_' :
                                shuffle($places);
                                $text = preg_replace(',' . $matches[0] . ',', current($places), $text, 1);
                                break;
                            case '_NOUN_' :
                                shuffle($nouns);
                                $text = preg_replace(',' . $matches[0] . ',', current($nouns), $text, 1);
                                break;
                        }
                    }

                    echo $text . "\n";

                    ?>
                </td>
            </tr>
			</table>

			<hr style="margin-top:0 ;">
			<div id="cls1">
				<p class="zgjedh">
					Like Open University
				</p>
				<button onclick="numrusi()" class="button1" style="vertical-align:middle"><span>Kliko ketu</span></button>

				
				<a href="button1"> </a>
								<script>
				function numrusi()
{
if(typeof(Storage)!=="undefined")
  {
  if (sessionStorage.clickcount)
    {
    sessionStorage.clickcount=Number(sessionStorage.clickcount)+1;
    }
  else
    {
    sessionStorage.clickcount=1;
    }
     document.getElementById("result").innerHTML="Keni klikuar butonin " + sessionStorage.clickcount + " herë ne kete sesion.";
  }
else
  {
  document.getElementById("result").innerHTML="Sorry, your browser does not support web storage...";
  }
}
</script>
    <div id="result"></div>


			</div>
		</br>
		</br>

		<?php include('includes\footer.php')?>
	</div>
</html>
