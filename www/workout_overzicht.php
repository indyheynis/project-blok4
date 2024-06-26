<?php
session_start(); // Start de sessie

require 'database.php';

$id = $_GET['id'];

$sql = "SELECT * FROM workouts WHERE workoutID = $id";

$result = mysqli_query($conn, $sql);

$workout = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details van <?php echo $workout['Title'] ?> </title>
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <header>
        <h1>Work4me</h1>
        <nav>
            <ul>
                <li><a href="homepagina.php">Home</a></li>
                <li><a href="workouts.php">Groepslessen</a></li>
                <li><a href="overzicht.php?id=">Overzicht</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <h1>Details van <?php echo $workout["Title"] ?> </h1>
        </section>

        <section class="details">
            <ul>
                <li>
                    <p>
                        </> <?php echo $workout['Title'] ?>
                </li>
                <li>
                    <p></p> <?php echo $workout['Description'] ?>
                </li>
                <li>
                    <p>Note</p> <?php echo $workout['Note'] ?>
                </li>

                <li>
                    <p>Toegevoed:</p> <?php echo $workout['added_at'] ?>
                </li>

                <li>
                    <img src="img/<? echo $workout['Image'] ?>" alt="">
                </li>
            </ul>
        </section>
    </main>


</body>

</html>