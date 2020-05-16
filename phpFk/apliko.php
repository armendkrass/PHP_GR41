<!DOCTYPE HTML>
<html>
<head>
	<title>
		Apliko tani!
	</title>
	<link rel="stylesheet" type="text/css" href="perlogin.css">

</head>
<body>	

		<?php
			if(isset($_POST['create']))
			{
				echo 'Keni aplikuar me sukses';
			}
		?>
	
		<p>Zgjedh Open University Tani!</p>
		<div class="katrori">
			<img src="foto/useri.png" class="useri">
				<h1>Mbushni te dhenat tuaja personale</h1>
					<form  action="">
						<p>Emri</p>
							<input type="text" name="emri" required="" placeholder="Emri">
						<p>Mbiemri</p>
							<input type="text" name="mbiemri" required=""  placeholder="Mbiemri">
						<p>Datelindja</p>
							<input type="date" name="datelindja" required="" placeholder="Datelindje">
						<p>E-mail</p>
							<input type="email" name="email" required="" placeholder="E-mail">
						<p>Vendi i lindjes</p>
							<input type="text" name="vl" required=""  placeholder="Vendi i lindjes">
						<p>Adresa e banimit</p>
							<input type="text" name="banon" required=""  placeholder="Adresa e banimit">
						<p>Numri i telefonit</p>
							<input type="number" name="number" required=""  placeholder="+383-04#-###-###">
						<p>Zgjedhni drejtimin</p>
							