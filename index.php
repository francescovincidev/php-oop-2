<?php
class Prodotti
{
    public $nome;
    public  $prezzo;
    public  $categoria;
    public $immagine;

    function __construct($_nome, $_prezzo, Categoria $_categoria, $_immagine = "https://montagnolirino.it/wp-content/uploads/2015/12/immagine-non-disponibile.png")
    {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->categoria = $_categoria;
        $this->immagine = $_immagine;
    }
}


class Categoria
{
    public $name;

    function __construct($_name)
    {
        $this->name = $_name;
    }
}

class Cibo extends Prodotti
{
    public $scadenza;
    public $tipo;
    function __construct($_nome, $_prezzo, Categoria  $_categoria,  $_tipo, $_scadenza, $_immagine = "https://montagnolirino.it/wp-content/uploads/2015/12/immagine-non-disponibile.png")
    {
        parent::__construct($_nome, $_prezzo, $_categoria, $_immagine);
        $this->tipo = $_tipo;
        $this->scadenza = $_scadenza;
    }
}

class Gioco extends Prodotti
{
    public $origine;
    public $materiale;
    function __construct($_nome, $_prezzo, Categoria  $_categoria, $_materiale, $_origine, $_immagine = "https://montagnolirino.it/wp-content/uploads/2015/12/immagine-non-disponibile.png")
    {
        parent::__construct($_nome, $_prezzo, $_categoria, $_immagine);
        $this->materiale = $_materiale;
        $this->origine = $_origine;
    }
}

class Cuccia extends Prodotti
{
    public $grandezza;
    public $materiale;
    function __construct($_nome, $_prezzo, Categoria  $_categoria, $_materiale, $_grandezza)
    {
        parent::__construct($_nome, $_prezzo, $_categoria);
        $this->materiale = $_materiale;
        $this->grandezza = $_grandezza;
    }
}

$prodotti = [

    $carne_in_scatola = (new Cibo("Carne in scatola", 34, new Categoria("Cane"), "Carne", "12/04/2024", "https://www.isoladeitesori.it/dw/image/v2/BGRZ_PRD/on/demandware.static/-/Sites-it-master-catalog/default/dwc425330e/idt/migliorcane_bocconi_con_manzo_405_gr__8007520011204_160924.jpg?sw=800&sh=800")),
    $croccantini = (new Cibo("Croccantini", 30, new Categoria("Cane"), "Carne e vegetali", "16/06/2024",)),
    $croccantini_vegetali = (new Cibo("Croccantini vegetali", 15, new Categoria("Cane"), "Vegetali", "02/07/2024",)),
    $pollo_in_scatola = (new Cibo("Pollo in scatola", 20, new Categoria("Gatto"), "Carne", "02/07/2023")),

    $osso_sonoro = (new Gioco("Osso sonoro", 11, new Categoria("Cane"), "Plastica", "Cina")),
    $rotolo_lana = (new Gioco("Rotolo di lana", 8, new Categoria("Gatto"), "Lana", "Cina", "https://www.youpacket.it/3423-large_default/gomitoli-di-lana-da-confezione.jpg")),
    $pollo_sonoro = (new Gioco("Pollo sonoro", 10, new Categoria("Gatto"), "plastica", "Germania")),

    $cuccia_piccola = (new Cuccia("Cuccuia per cani di piccola taglia", 40, new Categoria("Cane"), "Legno", "S")),
    $cuccia_media = (new Cuccia("Cuccuia per cani di media taglia", 60, new Categoria("Cane"), "Metallo", "M")),
    $lettino_gatto = (new Cuccia("Lettino per gatto", 35, new Categoria("Gatto"), "Cotone", "S"))

];



var_dump($carne_in_scatola);
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


            <?php foreach ($prodotti as $prodotto) { ?>
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