<?php
session_start();

// initializing variables
$name = "";
$surname="";
$email    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $surname = mysqli_real_escape_string($db, $_POST['surname']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array

    if ($password_1 != $password_2) {
        array_push($errors, "Fjalkalimet duhen te jen te njejta");
    }
    if (empty($email)||!filter_var($email,FILTER_VALIDATE_EMAIL) || !preg_match("/^([a-z0-9_.-]+){4}@([a-z]+){3}\.([a-z\.]{2,6})$/",$email)){
        array_push($errors,"Email eshte jo valide");
    }
    if (empty($name)||!preg_match("/^[a-zA-Z ]*$/",$name)||strlen($name)<=3)  {
        array_push($errors, 'Emri duhet te permbaje me shum se 2 shkronja!');
    }
    if (empty($surname)||!preg_match("/^[a-zA-Z ]*$/",$surname))  {
        array_push($errors, 'Mbiemri duhet te permbaje me shum se 2 shkronja!');
    }
    if (empty($password_1) || !preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}$/",$password_1)){
        array_push($errors,'Fjalkalimi duhet te permbaje se paku 8 karaktere, se paku nje numer, nje shkronje te vogel dhe nje shkronje te madhe!');


    }

    // first check the database to make sure
    // a user does not already exist with the same name and/or email
    $user_check_query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists


        if ($user['email'] === $email) {
            array_push($errors, "email eshte nen perdorim");
        }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password_1);//encrypt the password before saving in the database

        $query = "INSERT INTO users (name,surname ,email, password) 
  			  VALUES('$name', '$surname','$email', '$password')";
        mysqli_query($db, $query);
        $string2array = explode(",",$name);
        $_SESSION['email']=$email;
        $_SESSION['name']=$string2array;

        header('location: home.php');

    }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
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
        if (mysqli_num_rows($results) == 1) {
            $name = mysqli_fetch_assoc($results);
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
            $_SESSION['success'] = "You are now logged in";
            header('location: home.php');

        }else {
            array_push($errors, "Wrong name/password combination");
        }
    }
}

?>
