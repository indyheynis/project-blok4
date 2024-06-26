<?php

session_start();

require 'database.php';

$sql = "SELECT * FROM workouts";
$result = mysqli_query($conn, $sql);
$workouts = mysqli_fetch_all($result, MYSQLI_ASSOC);




if (isset($_GET['submit'])) {


    if (!empty($_GET['zoekveld'])) {



        require 'database.php';

        $zoekterm = $_GET['zoekveld'];

        $sql = "SELECT * FROM workouts WHERE Title LIKE '%$zoekterm%'";
        $result = mysqli_query($conn, $sql);
        $workouts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
}

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
                <li><a href = "logout.php"> Log Out </a>

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
            <?php foreach ($workouts as $workout) : ?>
                <div class="recept">
                    <a href="">
                        <div class="recept-blok">
                            <img src="img/<?php echo $workout['Image'] ?>" alt="foto">
                            <h2><?php echo $workout["Title"] ?></h2>
                            <a href="workout_overzicht.php?id=<?php echo $workout['workoutID'] ?>"> Details bekijken</a>
                        </div>
                    </a>
                </div>
                <?php endforeach ?>;
        </section>


    </section>
</body>

</html>