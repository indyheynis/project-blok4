<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registratieformulier</title>
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

    <body>
        <h2>Registratieformulier </h2>
        <div class="container">

            <form action="registration_process.php" method="post">
                <div class="form-group">
                    <label for="txtEmail">E-mail</label>
                    <input type="text" id="txtEmail" name="txtEmail" required>
                </div>
                <div class="form-group">
                    <label for="txtVoornaam">Voornaam</label>
                    <input type="text" id="txtVoornaam" name="txtVoornaam" required>
                </div>
                <div class="form-group">
                    <label for="txtAchternaam">Achternaam</label>
                    <input type="text" id="txtAchternaam" name="txtAchternaam" required>
                </div>

                <div class="form-group">
                    <label for="txtPassword">Wachtwoord</label>
                    <input type="password" id="txtPassword" name="txtPassword" required>
                </div>

                <div class="form-group">
                    <label for="txtUsername">Username</label>
                    <input type="text" id="txtUsername" name="txtUsername" required>
                </div>







                <div class="form-group form-group-inline">
                    <label for="active">Is deze gebruiker actief?</label>
                    <input type="radio" id="active" name="active" value="yes"> Ja
                    <input type="radio" id="inactive" name="active" value="no"> Nee
                </div>

                <div class="form-group">
                    <label for="role">Rol</label>
                    <select id="role" name="role">
                        <option value="administrator">Administrator</option>
                        <option value="customer">Customer</option>
                        <option value="employee">employee</option>
                    </select>
                </div>

                <button type="submit">Verstuur</button>
            </form>
        </div>
    </body>

</html>