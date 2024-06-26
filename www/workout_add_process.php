<?php

if ($_SERVER['REQUEST_METHOD'] != "POST") {
    echo "Er is geen POST verzoek gedaan";
    exit;
}
if (!isset($_POST['submit'])) {
    echo "Er is op de knop gedrukt";
    exit;
}


// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";

if (
    !isset($_POST['workout_naam']) ||
    !isset($_POST['workout_beschrijving']) ||
    !isset($_POST['workout_duration']) ||
    !isset($_POST['workout_note']) ||
    !isset($_POST['added_at']) ||
    !isset($_POST['workout_image'])
) {
    echo "De vereiste sleutel in de array bestaat niet";
    exit;
}

if (
    empty($_POST['workout_naam']) ||
    empty($_POST['workout_beschrijving']) ||
    empty($_POST['workout_duration']) ||
    empty($_POST['workout_note']) ||
    empty($_POST['added_at']) ||
    empty($_POST['workout_image'])
) {
    echo "Een van de velden is leeg";
    exit;
}


require "database.php"; //$conn
$workout_naam = $_POST['workout_naam'];
$workout_beschrijving = $_POST['workout_beschrijving'];
$workout_duration = $_POST['workout_duration'];
$workout_image = $_POST['workout_image'];
$workout_note = $_POST['workout_note'];
$added_at = $_POST['added_at'];


$sql = "INSERT INTO workouts(Title, Description, Duration, Image, Note, added_at) VALUES ('$workout_naam', '$workout_beschrijving', '$workout_duration', '$workout_image', '$workout_note', '$added_at')";
if (mysqli_query($conn, $sql)) {
    header("location: homepagina.php");
}
