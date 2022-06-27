<?php
    // creo una variabile con la parola inserita dall'utente nel form
    // utilizzando isset per non avere errore iniziale
    if (isset($_GET["name"])) {
        $name = $_GET["name"];
        // controllo che il nome sia più lungo di 3 caratteri, se sì stampo "OK"
        // funziona
        if (strlen($name)>3) {
            $message = 'OK';
        } else {
            $message = 'NO';
        };
        echo $message;
    };

    if (isset($_GET["mail"])) {
        $mail = $_GET["mail"];
        $position_at_sign = strpos($mail, '@');
        if ($position_at_sign !== false) {
            $position_dot = strpos($mail, '.', $position_at_sign);
            if ($position_dot !== false) {
                $message = 'OK';
            } else {
                $message = 'NO';
            }
        } else {
            $message = 'NO';
        };
        echo $message;
    };

    if (isset($_GET["age"])) {
        $age = $_GET["age"];
        // controllo che il nome sia più lungo di 3 caratteri, se sì stampo "OK"
        // funziona
        if (is_numeric($age)) {
            $message = 'OK';
        } else {
            $message = 'NO';
        };
        echo $message;
    };
    
    // controllo che il nome sia più lungo di 3 caratteri, se sì stampo "OK"
    // funziona
    
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- form per il nome -->
    <form action="" method="get">
        <label for="name">Inserire nome</label>
        <input type="text" name="name">
        <button>Invia</button>
    </form>

    <!-- form per la mail -->
    <form action="" method="get">
        <label for="mail">Inserire mail</label>
        <input type="text" name="mail">
        <button>Invia</button>
    </form>

    <!-- form per l'età -->
    <form action="" method="get">
        <label for="age">Inserire età</label>
        <input type="text" name="age">
        <button>Invia</button>
    </form>

    <!-- <h3>Il tuo nome è: <?= $name ?></h3>
    <h3>La tua mail è: <?= $mail ?></h3>
    <h3>La tua età è: <?= $age ?></h3> -->
</body>

</html>