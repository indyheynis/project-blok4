<?php
require 'database.php';

if (isset($_GET['submit'])) { //als er op de knop gedrukt is

    if (isset($_GET['search'])) { // bestaat de search key in de GET array

        $zoekterm = $_GET['search'];

        if (!empty($zoekterm)) { // Als er dus iets is ingevuld!!!

            if (strlen($zoekterm) >= 3) {
                // echo "Het zoekveld bevat minimaal 3 tekens.";

                $sql = "SELECT * FROM workouts WHERE Title LIKE '$zoekterm'   ";

                $result = mysqli_query($conn, $sql);

                $zoekResultaten = mysqli_fetch_all($result, MYSQLI_ASSOC);
            } else {
                echo "Het zoekveld bevat niet minimaal 3 tekens.";
            }
        }
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include 'nav.php' ?>
    <main>


        <form action="" method="get">
            <label for="search">Zoek:</label>
            <input type="text" name="search" ;id="search">
            <button type="submit" name="submit">Zoek workout </button>
        </form>
    </main>
    <div class="results">
        <table>
            <thead>
                <tr>
                    <th>title</th>
                    <th>beschrijving</th>
                    <th>foto</th>
                    <th>duration</th>
                </tr>
            </thead>
            <tbody>`
                <?php if (isset($zoekResultaten)) : ?>
                    <?php foreach ($zoekResultaten as $resultaat) :  ?>
                        <tr>
                            <td>
                                <?php echo $resultaat['Title'] ?>
                            </td>
                            <td>
                                <?php echo $resultaat['Description'] ?>
                            </td>
                            <td>
                                <?php echo $resultaat['Image'] ?>
                            </td>
                            <td>
                                <?php echo $resultaat['Duration'] ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>

</html>