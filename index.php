<?php
include __DIR__ . "/structure/header.php";
include __DIR__ . "/model/movie.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <section class="container">
        <h2>Movie</h2>

        <div class="row">
            <?php foreach ($movies as $movie) {
                $movie->printCard();
            } ?>
        </div>

        <a href="book.php">Book</a>
    </section>

    <?php
    include __DIR__ . "/structure/footer.php";
    ?>
</body>

</html>