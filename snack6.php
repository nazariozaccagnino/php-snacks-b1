<?php
$class = '';

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Snack 6</title>
</head>

<body>
    <div class="container">
        <?php foreach ($db as $key => $items) { ?>
            <div>
                <?php 
                echo $key;
                if($key === 'teachers'){
                    $class = 'graysquare';
                } elseif ($key === 'pm'){
                    $class = 'greensquare';
                }
                ?>
            </div>            
            <?php foreach ($items as $people) { ?>                
            <div class="<?php echo $class ?>"><?php echo $people['name'].' '.$people['lastname'] ?></div>
            <?php } ?>
        <?php } ?>
    </div>
</body>

</html>