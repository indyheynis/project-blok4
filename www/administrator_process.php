<?php

if (
    empty($_POST['txtPosition']) ||
    empty($_POST['txtEmployee_id']) ||
    empty($_POST['txtStart_date'])


) {
    echo "Een van de velden is leeg";
    exit;
}
if (
    !isset($_POST['txtPosition']) ||
    !isset($_POST['txtEmployee_id']) ||
    !isset($_POST['txtStart_date'])
) {
    echo "De vereiste sleutel in de array bestaat niet";
    exit;
}

require 'database.php';
$position = $_POST['txtPosition'];
$start_date = $_POST['txtStart_date'];
$employee_id = $_POST['txtEmployee_id'];


if (mysqli_query($conn, "INSERT INTO Employee (position, start_date, employee_id) VALUES ('$position', '$start_date', '$employee_id')")) {
    header("location: homepagina.php");
}
