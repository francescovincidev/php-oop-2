<?php
$prodotti = [

    $carne_in_scatola = (new Cibo("Carne in scatola", 34, new Categoria("Cane"), "Carne", "12/04/2024", "https://www.isoladeitesori.it/dw/image/v2/BGRZ_PRD/on/demandware.static/-/Sites-it-master-catalog/default/dwc425330e/idt/migliorcane_bocconi_con_manzo_405_gr__8007520011204_160924.jpg?sw=800&sh=800")),
    $croccantini = (new Cibo("Corccantini", 30, new Categoria("Cane"), "Carne e vegetali", "16/06/2024",)),
    $croccantini_vegetali = (new Cibo("Croccantini vegetali", 15, new Categoria("Cane"), "Vegetali", "02/07/2024",)),
    $pollo_in_scatola = (new Cibo("Pollo in scatola", 20, new Categoria("Gatto"), "Carne", "02/07/2023")),

    $osso_sonoro = (new Gioco("Osso sonoro", 11, new Categoria("Cane"), "Plastica", "Cina")),
    $rotolo_lana = (new Gioco("Rotolo di lana", 8, new Categoria("Gatto"), "Lana", "Cina", "https://www.youpacket.it/3423-large_default/gomitoli-di-lana-da-confezione.jpg")),
    $pollo_sonoro = (new Gioco("Pollo sonoro", 10, new Categoria("Gatto"), "plastica", "Germania")),

    $cuccia_piccola = (new Cuccia("Cuccuia per cani di piccola taglia", 40, new Categoria("Cane"), "Legno", "S")),
    $cuccia_media = (new Cuccia("Cuccuia per cani di media taglia", 60, new Categoria("Cane"), "Metallo", "M")),
    $lettino_gatto = (new Cuccia("Lettino per gatto", 35, new Categoria("Gatto"), "Cotone", "S"))

];
