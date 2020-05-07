<?php
if (isset($_POST['signupsubmitL'])){

    require 'databaseSignup.php';
    
    $username=$_POST['usernameS'];
    $email=$_POST['email'];
    $pass=$_POST['passwordS'];
    $pass2=$_POST['passwordS2'];

if (empty($username)||empty($email)||empty($pass)||empty($pass2)) {

header("Location : ../signup.php?error=emptyfields&usernameS=".$username."&email=".$email);
exit();

}
elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    header("Location : ../signup.php?error=invalidemail&usernameS=".$username);
exit();
}
elseif (!preg_match("/ˆ[a-zA-Z0-9]*$/",$username)) {
    header("Location : ../signup.php?error=invaliduseename&email=".$email);
exit();    

}
elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)&&!preg_match("/ˆ[a-zA-Z0-9]*$/",$username)){
    header("Location : ../signup.php?error=invalidemailusername");
    exit();    
    
}
elseif ($pass!==$pass2) {
    header("Location : ../signup.php?error=passwordcheck&usernameS=".$username."&email=".$email);
exit();    

} else {
    
    $sql="SELECT username FROM users WHERE username=?";
    $statement = mysqli_stmt_inti($conn);
    if (!mysqli_stmt_init($sql,$statement)) {
        header("Location : ../signup.php?error=sqlerrorr");
        exit(); 

    }
    else {
        mysqli_stmt_bind_param($statement,"s",$username);
        mysqli_stmt_execute($statement);
        mysqli_stmt_store_result($statement);
        $resultCheck = mysqli_stmt_num_rows($statement);
        if ($resultCheck > 0) {
            header("Location : ../signup.php?error=usertaken".$email);
            exit(); 
        }else{
            $sql = "INSERT INTO user (username , email , password) VALUES (?,?,?) ";
            $statement = mysqli_stmt_init($conn); 
            if (!mysqli_stmt_prepare($statement,$sql)) {
                header("Location : ../signup.php?error=sqlerrorr");
                exit();           
            }else{

                $hashpass = password_hash($pass,PASSWORD_DEFAULT);
                mysqli_stmt_bind_param($statement,"sss",$username,$email,$hashpass);
                mysqli_stmt_execute($statement);
                header("Location : ../signup.php?signup=succes");
                exit();


            }
                

        }
    }

    }
mysqli_stmt_close($statement);
msqli_close($conn);
}

else {
    header("Location : ../signup.php");
    exit();
}

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
	<form  action="signup.php" method ="post" >
		<p>Përdoruesi</p>
		<input type="text" name="usernameS" required="" id="idja" placeholder="Shkruaj Përdoruesin" class="form-control">
		<p>Email</p>
        <input type="text" name="email" required="" id="idja" placeholder="Shkruaj email" class="form-control">
		<p>Fjalëkalimi</p>
		<input type="password" name="passwordS" required="" id="pasi" placeholder="Shkruaj Fjalëkalimin" class="form-control">
		<p>Fjalëkalimi</p>
		<input type="password" name="passwordS2" required="" id="pasi" placeholder="Shkruaj Fjalëkalimin" class="form-control">
		
		<button type="submit" name="signupsubmit"  onclick="plotsimihapsirav()">sign up</button>
		<br>
		<br>


		<a href="signup.php">Keni harruar fjalëkalimin?</a>
	</br>
	</form>
    <form action="logout.php" method ="post">
    <button type="submit" name="logoutsubmit"  >logout</button>
    </form>
</div>
</body>

</html>