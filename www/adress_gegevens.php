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
            <h2>Adressgegevens </h2>
            <div class="container">

                <form action="adress_gegevens_process.php" method="post">


                    <div class="form-group">
                        <label for="txtStreet">Straatnaam</label>
                        <input type="text" id="txtStreet" name="txtStreet" required>
                    </div>

                    <div class="form-group">
                        <label for="txtHousenumber">Huisnummer</label>
                        <input type="text" id="txtHousenumber" name="txtHousenumber" required>
                    </div>

                    <div class="form-group">
                        <label for="txtZipcode">Postcode</label>
                        <input type="text" id="txtZipcode" name="txtZipcode" required>
                    </div>

                    <div class="form-group">
                        <label for="txtCity">City</label>
                        <input type="text" id="txtCity" name="txtCity" required>
                    </div>

                    <div class="form-group">
                        <label for="txtCountry">County</label>
                        <input type="text" id="txtCountry" name="txtCountry" required>
                    </div>

                    <div class="form-group">
                        <label for="txtPhone">Telefoonnummer</label>
                        <input type="text" id="txtPhone" name="txtPhone" required>
                    </div>

                    <div class="form-group">
                        <label for="txtMobile">Mobile</label>
                        <input type="text" id="txtMobile" name="txtMobile" required>
                    </div>


            </div>

            <button type="submit">Verstuur</button>
            </form>
            
        </body>

    </html>



</html>