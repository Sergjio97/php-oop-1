<?php 

// Inclusione classe 'Movies'
include_once __DIR__ . '/classes/Movies.php';

//array istanze Movies
$Films = [
    new Movies("...Altrimenti ci arrabbiamo!", "Italiano", "commedia/azione", 1974, 98),
    new Movies("Lo chiamavano Trinità...", "Inglese", "commedia/western/avventura", 1970, 117),
    new Movies("Io sto con gli ippopotami", "Italiano", "commedia/avventura/azione", 1979, 109),
    new Movies("...Più forte ragazzi!", "Italiano", "commedia/avventura", 1972, 122),
];

//trame 
$Films[0]->trama = "Ben e Kid (Bud Spencer e Terence Hill), un meccanico e un camionista, sono grandi amici, ma diventano acerrimi rivali quando si tratta di corse automobilistiche. Un giorno si trovano uno contro l’altro in una gara di rallycross, in cui il primo premio è una Dune Buggy tutta rossa con cappottina gialla.";

$Films[1]->trama = "Il pistolero Trinità, pigro ma dal cuore d'oro e particolarmente abile con la pistola, vaga nel deserto sdraiato su una treggia trainata dal suo cavallo. Giunto in una squallida locanda, si scontra con due cacciatori di taglie e sottrae loro un messicano che ha una taglia sulla testa. Continuando il suo viaggio, giunge in un paese dove trova suo fratello, detto Bambino, delinquente e ladro di cavalli divenuto inaspettatamente sceriffo. ";

$Films[2]->trama = "Africa coloniale britannica, 1950. Nella Rhodesia per lavoro, Tom organizza safari per turisti, armandoli a loro insaputa con fucili caricati a salve (eccetto il suo), poiché comunque ama e rispetta gli animali. L'uomo è stato cresciuto con suo cugino Slim da una donna nativa africana, dopo che suo padre e suo zio sono morti.
Con l'arrivo di Slim, fannullone giramondo e rubacuori, iniziano le scaramucce tra i due che si concludono quando diventano soci nell'acquisto di un nuovo pullman per i safari. ";

$Films[3]->trama = "Salud e Plata (Bud Spencer e Terence Hill) sono due abili piloti d’aereo, che per lavoro sorvolano il Sudamerica a bordo di scalcagnati velivoli trasportando merci e persone. Per arrotondare lo stipendio, inscenano falsi incidenti aerei per conto di Naso, un loro amico sempre a corto di denaro e con una numerosa prole a cui provvedere, in modo da intascare i soldi dell’assicurazione."

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>

    <h1>Bud Spencer & Terence Hill</h1>

    <?php foreach($Films as $Film) { ?>
        <!-- titolo -->
        <h3> <?php echo $Film->titolo ?> </h3>
        <!-- info film -->
        <ul>
            <li> Trama : <?php echo $Film->trama ?> </li>
            <li> Lingua : <?php echo $Film->lingua ?> </li>
            <li> Genere : <?php echo $Film->genere ?> </li>
            <li> Anno : <?php echo $Film->anno ?> </li>
            <li> Durata : <?php echo $Film->durata ?> </li>
            <li> Prezzo : € <?php echo $Film->getSconto() ?> </li>
        </ul>

    <?php } ?>

</body>
</html>