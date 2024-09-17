<?php
    include "./partials/db.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP - OOP Class exercise</title>
</head>
<body>
    <div class="container">
        <div class="row gy-3">
            <div class="col-12">
                <h1 class="my-3 text-center fw-bolder">PHP Movie List</h1>
            </div>
            <?php foreach($moviesArray as $movie) { ?>
            <div class="col-12 col-md-6 col-4">
                <div class="card h-100 p-3">
                    <div class="card-title">
                        <h2> <?php echo $movie->title ?> </h2>
                    </div>
                    <div class="card-body">
                        <h4>Genere:</h4>
                        <?php foreach($movie->genres as $genre) { ?>
                            <p> <?php echo $genre ?> </p>
                        <?php } ?>
                        <h4>Durata:</h4>
                        <p> <?php echo $movie->duration ?> minuti</p>
                        <h4>Regista:</h4>
                        <p> <?php echo $movie->director ?> </p>
                        <h4>Anno:</h4>
                        <p> <?php echo $movie->year ?> </p>
                        <h4>Cast principale:</h4>
                        <ul class="list-unstyled">
                            <?php foreach($movie->cast as $actor) { ?>
                                <li><?php echo $actor ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>