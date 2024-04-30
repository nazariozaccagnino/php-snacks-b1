<?php
$matches = [
    [
        'home'=>'Brindisi',
        'away'=>'Venezia',
        'homepts'=>'84',
        'awaypts'=>'80',
    ],
    [
        'home'=>'Olimpia Milano',
        'away'=>'Brescia',
        'homepts'=>'83',
        'awaypts'=>'77',
    ],
    [
        'home'=>'Pesaro',
        'away'=>'Cremona',
        'homepts'=>'91',
        'awaypts'=>'86',
    ],
]


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Snack 1</title>
</head>

<body>
    <h1>Risultati Serie A - Giornata 29 - 28/04/2024</h1>
    <div>
        <?php 
            foreach ($matches as $match) {
                
            }

        ?>
    </div>
</body>
</html>