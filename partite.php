<?php
$partite = [
    [
        [
            'nome' => 'Olimpia Milano',
            'casa' => true,
            'punteggio' => 55,
        ],
        [
            'nome' => 'Cantù',
            'casa' => false,
            'punteggio' => 60,
        ]
    ],
    [
        [
            'nome' => 'Bari',
            'casa' => true,
            'punteggio' => 78,
        ],
        [
            'nome' => 'Pescara',
            'casa' => false,
            'punteggio' => 100,
        ]
    ],
    [
        [
            'nome' => 'Roma',
            'casa' => true,
            'punteggio' => 101,
        ],
        [
            'nome' => 'Torino',
            'casa' => false,
            'punteggio' => 99,
        ]
    ]    
];
// var_dump($partite);
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
    <?php
        $arr_length = count($partite);
        for ($i=0; $i<$arr_length; $i++) {
            $partita = $partite[$i];
            echo "<div> {$partita[0]['nome']} - {$partita[1]['nome']} | {$partita[0]['punteggio']} - {$partita[1]['punteggio']}</div>";
        }    
    ?>
    
</body>
</html>