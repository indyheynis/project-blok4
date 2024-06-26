<?php

if (
    empty($_POST['txtStreet']) ||
    empty($_POST['txtHousenumber']) ||
    empty($_POST['txtZipcode']) ||
    empty($_POST['txtCity']) ||
    empty($_POST['txtCountry']) ||
    empty($_POST['txtMobile']) ||
    empty($_POST['txtPhone'])
    
    
    ) {
    echo "Een van de velden is leeg";
    exit;
}
if (
    !isset($_POST['txtStreet']) ||
    !isset($_POST['txtHousenumber']) ||
    !isset($_POST['txtZipcode']) ||
    !isset($_POST['txtCity']) ||
    !isset($_POST['txtCountry']) ||
    !isset($_POST['txtMobile']) ||
    !isset($_POST['txtPhone'])
) {
    echo "De vereiste sleutel in de array bestaat niet";
    exit;
}

require 'database.php';
$straat = $_POST['txtStreet'];
$huisnummer = $_POST['txtHousenumber'];
$postcode = $_POST['txtZipcode'];
$country = $_POST['txtCountry'];
$city = $_POST['txtCity'];
$mobile = $_POST['txtMobile'];
$phone = $_POST['txtPhone'];

$last_id = mysqli_insert_id($conn);


$sql = "INSERT INTO addresses(address_id, street, housenumber, zipcode, city, country, phone, mobile) VALUES ('$last_id', '$straat', '$huisnummer', '$postcode', '$country', '$city', '$phone', '$mobile')";

if (mysqli_query($conn, $sql)) {
    header("location: homepagina.php");
}

?>
