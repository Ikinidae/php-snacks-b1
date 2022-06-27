<?php    
    // creo un unico if in cui utilizzo isset per non avere errori iniziali
    if (isset($_GET["name"]) && isset($_GET["mail"]) && isset($_GET["age"])) {
        // assegno le variabili per i 3 dati
        $name = $_GET["name"];
        $mail = $_GET["mail"];
        $age = $_GET["age"];

        // assegno ad una variabile la posizione della chiocchiola
        $position_at_sign = strpos($mail, '@');

        // assegno ad una variabile la posizione del punto (dopo la chiocchiola)
        $position_dot = strpos($mail, '.', $position_at_sign);

        if (strlen($name)>3 && is_numeric($age) == true && $position_at_sign !== false && $position_dot !== false) {
            $message = 'Accesso riuscito';
        } else {
            $message = 'Accesso negato';
        }
    } else {
        $message = 'Inserire dati';
    }
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
        <div>
            <label for="name">Inserire nome</label>
            <input type="text" name="name">
        </div>

        <div>
            <label for="mail">Inserire mail</label>
            <input type="text" name="mail">
        </div>
        
        <div>
            <label for="age">Inserire età</label>
            <input type="text" name="age">
        </div>

        <button>Invia</button>
    </form>

    <p> <?= $message ?> </p>
</body>

</html>