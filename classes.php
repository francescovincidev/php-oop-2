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

    public function checkName($nome)
    {
        if (empty($nome)) {
            throw new Exception("Il nome non puo essere vuoto", 1);
        }
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
