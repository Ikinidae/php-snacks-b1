<?php
    $numbers = [];
    for ($i=0; $i<=15; $i++) {
        $number = rand(1,100);
        if (!in_array($number,$numbers)) {
            $numbers[] = $number;
        }
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
    <h1>15 numeri random:</h1>
    <p>
        <?php
            for ($i=0; $i<count($numbers); $i++)
                echo "<p> $numbers[$i] </p>";
        ?>
    </p>
</body>
</html>