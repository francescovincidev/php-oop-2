<?php

include_once __DIR__ . "./require.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">


            <?php foreach ($prodotti as $prodotto) {
                try {
                    $prodotto->checkName($prodotto->nome);
                } catch (Exception $err) {

                    echo $err;
                }

            ?>
                <div class="col-3 m-3">

                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $prodotto->immagine; ?>" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $prodotto->nome; ?>
                            </h5>
                            <p class="card-text">Prezzo: <?php echo $prodotto->prezzo; ?></p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>