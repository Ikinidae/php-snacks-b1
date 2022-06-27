<?php
    $posts = [

        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
    ];
    $post_1 = $posts["10/01/2019"][0]['title'];

    // salvo tutte le chiavi dell'array principale, ovvero le date
    $dates = array_keys($posts);

    // creo un ciclo for
    for ($i=0; $i<count($posts); $i++) {
        // stampare la data
        echo "<div> {$dates[$i]} </div>";
        $post = $posts[$dates[$i]];
        // stampare il post
        for ($j=0; $j<count($post); $j++) {
            $info = $post[$j];
            echo "<div> {$info['title']} </div>";
            echo "<div> {$info['author']} </div>";
            echo "<div> {$info['text']} </div>";
        };
    };
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
    <div>

    </div>
    <p> <?= $post_1 ?> </p>
<div></div>
</body>

</html>