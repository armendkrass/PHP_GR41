<?php
$name_error=$email_error=$area_error=$surname_error="";
$name=$email=$area=$surname=$sukses="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
	if(empty($_POST["name"])){
		$name_error="Kerkohet emri";
	}else{
		$name=test_input($_POST["name"]);
	 if(!preg_match("/^[a-zA-Z]*$/", $name)){
			$name_error="Vetem shkronja dhe white space lejohen";
		}
	}
	if(empty($_POST["surname"])){
		$surname_error="Kerkohet mbiemri";
	}else{
		$surname=test_input($_POST["surname"]);
	 if(!preg_match("/^[a-zA-Z]*$/", $surname)){
			$surname_error="Vetem shkronja dhe white space lejohen";
		}
	}
	if (empty($_POST["email"])) {
		$email_error="Emaili kerkohet";
	}else {
		$email=test_input($_POST["email"]);
	 if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		$email_error="Invalid email";
	}
}
	if(empty($_POST["area"])){
			$area="";
		}else{
		 $area=test_input($_POST["area"]);
		}
		if($name_error==''and $email_error==''and $surname_error=''and $area_error=''){
			$mesazh='';
			unset($_POST['submit']);
			foreach ($_POST as $key => $value) {
				$mesazh.="$key: $value\n";
			}
			to='floriani2009@hotmail.com';
			$subject=' Form Submit';
			if(mail($to,$subject,$area)){
				$sukses="Mesazhi u dergua";
				$name=$email=$area=$surname='';
			}
		}
}
function test_input($data){
	$data=trim($data);
	$data=stripcslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}


?>