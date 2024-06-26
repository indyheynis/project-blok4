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


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tool create</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <form action="workout_add_process.php" method="post">

        <div class="form-group">
            <label for="workout_naam">Workout Title</label>
            <input type="text" name="workout_naam" id="workout_naam" required>
        </div>

        <div class="form-group">
            <label for="workout_beschrijving">Workout Description</label>
            <input type="text" name="workout_beschrijving" id="workout_beschrijving">
        </div>

        <div class="form-group">
            <label for="workout_duration">Workout Duration</label>
            <input type="text" name="workout_duration" id="workout_duration">
        </div>

        <div class="form-group">
            <label for="workout_image">Workout Image</label>
            <input type="text" name="workout_image" id="workout_image">
        </div>

        <div class="form-group">
            <label for="workout_note">Workout Note</label>
            <input type="text" name="workout_note" id="workout_note" required>
        </div>

        <div class="form-group">
            <label for="added_at">Toegevoegd op</label>
            <input type="text" name="added_at" id="added_at" required>
        </div>

        <button type="submit" name="submit">Maak workout aan</button>

    </form>

</body>

</html>