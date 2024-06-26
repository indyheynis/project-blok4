<?php
session_start(); // Start de sessie

require 'database.php';

$id = $_GET['id'];

$sql = "SELECT * FROM users WHERE id = $id";

$result = mysqli_query($conn, $sql);

$users = mysqli_fetch_assoc($result);

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
                <li><a href="overzicht_gebruikers.php"> overzicht admin </li></a>

                <form action="" method="get">
                    <label for="search">vul een zoekterm in:</label>
                    <input type="text" name="zoekveld" id="zoekveld">
                    <button type="submit" name="submit">Zoek!!</button>
                </form>




            </ul>
        </nav>
    </header>



    <main>
        <section>
            <h1>Details van <?php echo $users["username"] ?> </h1>
        </section>

        <section class="details">
            <ul>
                <li>
                    <p>username</p> <?php echo $users['username'] ?>

                </li>
                <li>
                    <p>Voornaam:</p> <?php echo $users['firstname'] ?>
                </li>
                <li>
                    <p>achternaam:</p> <?php echo $users['lastname'] ?>
                </li>

                <li>
                    <p>Role:</p> <?php echo $users['role'] ?>
                </li>
                <li>
                    <p>Actief:</p> <?php echo $users['active'] ?>
                </li>
                <li>
                    <p>Id:</p> <?php echo $users['id'] ?>
                </li>



            </ul>
        </section>
    </main>


</body>

</html>


</body>



</html>