<?php
session_start();

$name = "";
$surname="";
$email    = "";
$errors = array();
try {


$db = mysqli_connect('localhost', 'root', '', 'registration');
}catch (Exception $exception){
    header("location:login.php?error=db");


}
if (isset($_POST['reg_user'])) {
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $surname = mysqli_real_escape_string($db, $_POST['surname']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    if ($password_1 != $password_2) {
        array_push($errors, "Fjalkalimet duhen te jen te njejta");
    }
    if (empty($email) || !filter_var($email,FILTER_VALIDATE_EMAIL) || !preg_match("/^([a-z0-9_.-]+){4}@([a-z]+){3}\.([a-z\.]{2,6})$/",$email)){
        array_push($errors,"Email eshte jo valide");
    }
    if (empty($name)||!preg_match("/^[a-zA-Z ]*$/",$name)||strlen($name)<3)  {
        array_push($errors, 'Emri duhet te permbaje vetem shkronja dhe jo me pak se 2!');
    }
    if (empty($surname)||!preg_match("/^[a-zA-Z ]*$/",$surname))  {
        array_push($errors, 'Mbiemri duhet te permbaje me shum se 2 shkronja!');
    }
    if (empty($password_1) || !preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}$/",$password_1)){
        array_push($errors,'Fjalkalimi duhet te permbaje se paku 8 karaktere, se paku nje numer, nje shkronje te vogel dhe nje shkronje te madhe!');
    }

    $user_check_query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists

        if ($user['email'] === $email) {
            array_push($errors, "email eshte nen perdorim");
        }
    }
    if (count($errors) == 0) {
        require 'Functions.php';
        $functionsObj=new Functions();
        $password = md5($password_1);

        $query = "INSERT INTO users (name,surname ,email, password) 
  			  VALUES('$name', '$surname','$email', '$password')";
        mysqli_query($db, $query);
        $string2array = explode(",",$name);
        $_SESSION['email']=$email;
        $_SESSION['name']=$string2array;

        $functionsObj->writeLog("Register valid");
        $functionsObj->writeLog("Registeration done by $email");

        header('location: home.php');

    }
}

if (isset($_POST['login_user'])) {
    require 'Functions.php';
    $functionsObj=new Functions();
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($email)) {
        array_push($errors, "Shkruani email");
    }
    if (empty($password)) {
        array_push($errors, "Shkruani fjalkalimin");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT name FROM users WHERE email='$email' AND password='$password'";
        $results = mysqli_query($db, $query);
        $name = mysqli_fetch_assoc($results);
        if (mysqli_num_rows($results) == 1) {
            if (!empty($_POST["remember"])) {
                    setcookie("email", $email, time() + (6*30*24*3600));
                } else {
                    if (isset($_COOKIE["email"])) {
                        setcookie("email", "");
                    }

                }
                $_SESSION['email'] = $email;
                $_SESSION['name'] = $name;
                $functionsObj->writeLog("Login valid");
                $functionsObj->writeLog("Login done by : $email");
                header('location: home.php');


            } else {
                header("location:login.php?error=wrong/user/and/password");
                $functionsObj->writeLog("Login invalid username");
                $functionsObj->writeLog("Login attempt by : $email");

            }
        }
}

?>
