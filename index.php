<?php
include __DIR__."/views/header.php";
include __DIR__."/model/movie.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   
    <title>Document</title>
</head>

<body>

    <section class="container">
        <h2>Movie</h2>

        <div class="row">
            <?php foreach($movies as $movie) {

                $movie->printCard();


            } ?>
        </div>

        <a href="book.php">Book</a>
    </section>

    <?php
    include __DIR__."/structure/footer.php";
    ?>
</body>

</html>