<?php 

// Inclusione classe 'Movies'
include_once __DIR__ . '/classes/Movies.php';

$Movies = [
    new Movies("...Altrimenti ci arrabbiamo!", "Italiano", "commedia/azione", 1974, 98);
    new Movies("Lo chiamavano Trinità...", "Inglese", "commedia/western/avventura", 1970, 117);
    new Movies("Io sto con gli ippopotami", "Italiano", "commedia/avventura/azione", 1979, 109);
];

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
</body>
</html>