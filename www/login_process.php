<?php


require 'database.php';

// var_dump($_POST);

//check de sleutels email en password

if (
    !isset($_POST['txtEmail'])
) {
    echo "De  sleutel email in de array bestaat niet";
    exit;
}

if (
    !isset($_POST['txtWachtwoord'])
) {
    echo "De  sleutel wachtwoord in de array bestaat niet";
    exit;
}

if (
    empty($_POST['txtEmail'])
) {
    echo "Vul uw email in";
    exit;
}

if (
    empty($_POST['txtWachtwoord'])
) {
    echo "Vul uw wachtwoord in";
    exit;
}


$email = $_POST['txtEmail'];
$password = $_POST['txtWachtwoord'];

$sql = "SELECT * FROM users WHERE email = '$email'";

$result = mysqli_query($conn, $sql);


$dbUser = mysqli_fetch_assoc($result);

if (is_null(($dbUser))) {
    echo "Dit emailadress is bij ons onbekend!";
    echo "<a href='login.php'>Terug naar login pagina</a>";
    exit;
}

//vanaf hier is bekende gebruiker, want we hebben op email gezocht inde database



if ($dbUser['password'] == $password) {
    session_start();
    $_SESSION['id'] = $dbUser['id'];
    $_SESSION['username'] = $dbUser['username'];
    $_SESSION['role'] = $dbUser['role'];





    header("location:homepagina.php");
    //check bladzijde 51
    exit;
} else {
    echo "Fout, wachtwoord verkeerd";
    echo "<a href='login.php'>Terug naar login pagina</a>";
}
