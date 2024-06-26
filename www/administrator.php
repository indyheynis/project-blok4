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
                <li><a href="login.php"> Log in</a>
                <li><a> ingelogd als:
                        <?php


                        if (isset($_SESSION['username']) && isset($_SESSION['username'])) {
                            echo $_SESSION['username'] . " ";
                        } else {
                            echo "U bent niet ingelogd";
                        }

                        ?> </li></a>

            </ul>
        </nav>
    </header>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registratieformulier</title>
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>

   

        <body>
            <h2>Administrator Formulier </h2>
            <div class="container">

                <form action="administrator_process.php" method="post">


                    <div class="form-group">
                        <label for="txtStart_date">Start Datum</label>
                        <input type="text" id="txtStart_date" name="txtStart_date" required>
                    </div>

                    <div class="form-group">
                        <label for="txtPosition">Position</label>
                        <input type="text" id="txtPosition" name="txtPosition" required>
                    </div>

                    <div class="form-group">
                        <label for="txtEmployee_id">employee id</label>
                        <input type="text" id="txtEmployee_id" name="txtEmployee_id" required>
                    </div>

                    <button type="submit">Verstuur</button>

            </div>
            </form>
            </div>
        </body>

    </html>



</html>