<?php

if (
    empty($_POST['txtEmail']) ||
    empty($_POST['txtPassword']) ||
    empty($_POST['txtVoornaam']) ||
    empty($_POST['txtAchternaam']) ||
    empty($_POST['txtUsername']) ||
    empty($_POST['role']) ||
    empty($_POST['active']) 
) {
    echo "Een van de velden is leeg";
    exit;
}
if (
    !isset($_POST['txtEmail']) ||
    !isset($_POST['txtPassword']) ||
    !isset($_POST['txtVoornaam']) ||
    !isset($_POST['txtAchternaam']) ||
    !isset($_POST['role']) ||
    !isset($_POST['active']) ||
    !isset($_POST['txtUsername'])  
) {
    echo "De vereiste sleutel in de array bestaat niet";
    exit;
}
require 'database.php';
$email = $_POST['txtEmail'];
$password = $_POST['txtPassword'];
$first_name = $_POST['txtVoornaam'];
$last_name = $_POST['txtAchternaam'];
$username = $_POST['txtUsername'];
$active = $_POST['active'];
$role = $_POST['role'];


$sql = "INSERT INTO users (email, password, firstname, lastname, username, active, role) VALUES ('$email', '$password', '$first_name', '$last_name','$username', '$active', '$role')";



if (mysqli_query($conn, $sql)) {
    $last_id = mysqli_insert_id($conn);

 

    if ($_POST['role'] == 'customer') {
        mysqli_query($conn, "INSERT INTO customer (customernumber) VALUES ($last_id)");
        
    } 
}







if ($_POST['role'] == "Administrator"  ||  $_POST['role'] == "employee") {
    header("location: administrator.php");
    exit();
} 
else {
    header("location: adress_gegevens.php");
    exit();
}



include 'registration.php';
