<?php
    require "config/config.php";
    $db = new Database();
    $db->Open();
    
  

    if(isset($_POST['signupusername']))
    {
        $user= $_POST['signupusername'];
        $name = $_POST['fullname'];
        $email = $_POST['signupemail'];
        $pass = $_POST['signuppassword'];
        $cpass = $_POST['signuppassword'];
        $privilegji = "2";

        if((!$suser)||(!$name)||(!$email)||(!$pass)||(!$cpass)){
            echo "ploteso";
        }else if($pass!=$cpass){
                echo "passnmatch";
            }else{
                $suser = preg_replace("#[^0-9a-z]#i","",$user);
               
                
                $semail = mysqli_real_escape_string($db->db, $email);
                
                //shiko per perdorues ose email te njejt
                $sql = "SELECT perdoruesi FROM tblperdoruesit WHERE perdoruesi='$suser'LIMIT 1";
                $rez = $db->Select($sql);
                $num_user = mysqli_num_rows($rez);


                $sqli = "SELECT email FROM tblperdoruesit WHERE email='$semail'LIMIT 1";
                $rezi = $db->Select($sqli);
                $num_email = mysqli_num_rows($rezi);

                $pass_length = strlen($spass);

                if($num_user>0){
                    echo "usergabim";
                }
                else if($num_email>0){
                    echo "emaili i perdorur";
                }else if($pass_length<6){
                    echo "gjatsia e passwordit e vogel";
                }
                else if(!preg_match('/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/', $semail)){
                    
                     echo "gaim emaili!!";
                } 
                else{
                   $query_insert = "INSERT INTO tblperdoruesit (perdoruesi,fjalkalimi,emri,email, privilegji ) VALUES ('$suser','$spass','$fname','$semail', '$privilegji' )"; 
                   $resultati = $db->Insert($query_insert);
                   echo "uregjistru";
                   $_SESSION["user"]["privilegjet"] = 2;
                }


            }

        }

?>