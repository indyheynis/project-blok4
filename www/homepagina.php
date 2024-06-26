<?php
session_start();

require 'database.php';

$sql = "SELECT * FROM workouts";
$result = mysqli_query($conn, $sql);
$workouts = mysqli_fetch_all($result, MYSQLI_ASSOC);

$sql1 = "SELECT * FROM images";
$result = mysqli_query($conn, $sql1);
$images = mysqli_fetch_all($result, MYSQLI_ASSOC);




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
        <h1 style="font-size:2vw">Work4Me</h1> 
        <nav>
            <ul>
                <li><a href="homepagina.php">Home</a></li>
                <li><a href="workouts.php">Groepslessen</a></li>
                <li><a href="overzicht.php?id=">Overzicht</a></li>
                
                <li><a href="login.php">Log In</a>
                <li><a> ingelogd als:
                        <?php


                        if (isset($_SESSION['username']) && isset($_SESSION['username'])) {
                            echo $_SESSION['username'] . " ";
                        } else {
                            echo "U bent niet ingelogd";
                        }

                        ?> </li></a>

                <li><a href="logout.php"> Log out </li></a>
                <li><a href="overzicht_gebruikers.php">Overzicht Admin</a>



            </ul>
        </nav>
    </header>

    <section class="home">
        <h1> Welkom op Work4Me!
            <p>Work4me heeft 2 vestigingen in Haarlem en Velserbroek. Wij zijn 365 dagen per jaar geopend, ongeacht welk abonnement je afsluit en dat tegen het voordeligste tarief van Nederland! Tevens biedt Work4Me buiten de grote fitness zalen ook heel veel live groepslessen aan.</p>
            <center>
                <div class="slider">
                    <?php foreach ($images as $image) : ?>
                        <div class="slides">
                            <img src="img/<?php echo $image['img'] ?>" alt="foto" class="slide_images">
                        </div>
                    <?php endforeach; ?>
                    <button class="prev" onclick="prevSlide()">&#10094;</button>
                    <button class="next" onclick="nextSlide()">&#10095;</button>
                </div>
                <script src="index.js"></script>


            </center>
    </section>

</body>

</html>