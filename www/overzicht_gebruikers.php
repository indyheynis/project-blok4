<?php
session_start();



if ($_SESSION['role'] == 'customer') {
    echo 'wegwezen';
    exit();
}

if ($_SESSION == null) {
    echo 'wegwezen';
    exit();
}

if (isset($_GET['submit'])) {


    if (!empty($_GET['zoekveld'])) {



        require 'database.php';

        $zoekterm = $_GET['zoekveld'];

        $sql = "SELECT * FROM workouts WHERE Title LIKE '%$zoekterm%'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
}

require 'database.php';

$sql = "SELECT * FROM users";

$result = mysqli_query($conn, $sql);

$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overzicht</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <h1 style="font-size:2vw">Work4Me</h1>
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
                <li><a href="workout_add.php?id=">Workout Toevoegen</a></li>
                <li><a href="statestieken.php?id=">Statestieken</a></li>

                <form action="" method="get">
                    <label for="search">vul een zoekterm in:</label>
                    <input type="text" name="zoekveld" id="zoekveld">
                    <button type="submit" name="submit">Zoek!!</button>
                </form>




            </ul>
        </nav>
    </header>



    <section class="workouts">
        <h1> Workouts </h1>
        <section class="recepten">
            <?php foreach ($users as $user) : ?>
                <div class="recept">
                    <a href="">
                        <div class="recept-blok">

                            <h2><?php echo $user['username'] ?></h2>
                            <a href="overzicht_administrator_gebruikers.php?id=<?php echo $user['id'] ?>"> Details bekijken</a>
                        </div>
                    </a>
                </div>
                <?php endforeach ?>;
        </section>