<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/card_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body class="bg-light">
    <div class="col-12 col-md-4 col-lg-3 mb-4">
        <div class="card h-100">
            <img src="<?= $image ?>" class="card-img-top my-ratio" alt="<?= $title ?>">
            <div class="card-body">
                <h5 class="card-title">
                    <?= $title ?>
                </h5>
                <p class="card-text">
                    <?= $content ?>
                </p>
                <div class="d-flex justify-content-between align-items-flex-start">
                    <?= $custom ?>
                    <div>
                        <?php $quantity ?>
                        <?php $price ?>

                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>