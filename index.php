<?php
// inclusione di functions.php
include 'functions.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Generatore di password</title>
</head>

<body>
    <div class="container text-center mt-5">
        <h1>Generatore di password</h1>
        <form method="GET" action="index.php" class="my-4">
            <div class="mb-3">
                <label for="length" class="form-label">Lunghezza della Password :</label>
                <input type="number" id="length" name="length" class="form-control w-50 mx-auto" min="1" required>
            </div>
            <button type="submit" class="btn btn-primary">Genera Password</button>
        </form>
        <?php

        // verifica della presenza del parametro length
        if (isset($_GET['length'])) {
            // conversione del parametro length in un intero 
            $length = intval($_GET['length']);
            // generazione della password 
            $password = generatePassword($length);
            echo '<div class="alert alert-success">Password Generata: ' . $password . '</div>';
        }



        ?>

    </div>
</body>

</html>