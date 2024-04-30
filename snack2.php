<?php
$message='';
//$username='';
//$mail='';
//$age='';
if(isset($_GET['username']) && isset($_GET['mail'])&&isset($_GET['age'])){
    if(strlen($_GET['username']) > 3 && str_contains($_GET['mail'], '.') && str_contains($_GET['mail'], '@') && is_numeric($_GET['age'])){
        $message = 'Accesso riuscito';
    } else{
        $message = 'Accesso negato';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Snack 2</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Login</h1>
        <div class="d-flex justify-content-center">
            <form action="snack2.php" method="GET">
                <input type="text" name="username" placeholder="Username">
                <input type="text" name="mail" placeholder="e-mail">
                <input type="text" name="age" placeholder="età">
                <button type="submit" class="btn btn-success">Invia</button>
            </form>
        </div>
        <div class="text-center"><?php echo $message ?></div>

    </div>
</body>

</html>