<?php


$servername = "localhost";
$dbusername = "root";
$dbpass= "";
$dbname = "login";

$conn = mysqli_connect($servername,$dbusername,$dbpass,$dbname);


if(!$conn){
    die("connection failed".mysqli_connect_error());
}