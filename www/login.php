<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

    <div class="container">
        <h2>Login</h2>
        <form action="login_process.php" method="post">
            <div class="form-group">
                <label for="txtEmail">E-mail:</label>
                <input type="email" id="txtEmail" name="txtEmail" placeholder="Vul hier uw e-mail in" required>
            </div>
            <div class="form-group">
                <label for="txtWachtwoord">Wachtwoord:</label>
                <input type="password" id="txtWachtwoord" name="txtWachtwoord" placeholder="Vul hier uw wachtwoord in" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Login">
            </div>
            <p>Nog geen account? Maak er <a href="registration.php">hier</a> een aan.</p>
            <p>Terug naar <a href="homepagina.php">home</a>
        </form>
    </div>
</body>

</html>