<?php
session_start();

require 'database.php';

if($_SESSION['role'] == 'customer') {
    echo 'wegwezen';
    exit();
}

if($_SESSION == null) {
    echo 'wegwezen';
    exit();
}


$sql1 = "SELECT * FROM workouts";


$sql2 = "SELECT * FROM users";

$resultUser = mysqli_query($conn, $sql2);

$resultWorkout = mysqli_query($conn, $sql1);

$workouts = mysqli_fetch_assoc($resultWorkout);
$users = mysqli_fetch_array($resultUser);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <h1> Work4Me </h1>
        <nav>
            <ul>
                <li><a href="homepagina.php">Home</a></li>
                <li><a href="workouts.php">Groepslessen</a></li>
                <li><a href="overzicht.php?id=">Overzicht</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php"> Log in</a>
                <li><a> ingelogd als:
                        <?php


                        if (isset($_SESSION['username']) && isset($_SESSION['username'])) {
                            echo $_SESSION['username'] . " ";
                        } else {
                            echo "U bent niet ingelogd";
                        }

                        ?> </li></a>

                <li><a href="logout.php"> Log out </li></a>


            </ul>
        </nav>
    </header>

    <section class="home">
        <h1>Totaal aantal workouts: <?php echo $workouts['workoutID'] ?>
        <h1>Totaal aantal users: <?php echo $users['id'] ?>
    </section>
</body>

</html>