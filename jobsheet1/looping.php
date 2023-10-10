<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>

<body>
    <?php
    echo "Perulangan FOR bilangan genap 1 sampai 10 </br>";
    for ($x = 2; $x <= 10; $x += 2)
        echo "$x </br>";
    echo "</br>";
    echo "Perulangan WHILE bilangan ganjil 1 sampai 10 </br>";
    $y = 1;
    while ($y <= 10) {
        echo "$y </br>";
        $y += 2;
    }
    //Perulangan DO WHILE bilangan prima kurang dari 20
    echo "</br> Perulangan DO WHILE bilangan prima 1 sampai 20 </br>";
    $i = 1;
    do {
        $a = 0;
        $j = 1;
        do {
            if ($i % $j == 0) {
                $a++;
            }
            $j++;
        } while ($j <= $i);
        if ($a == 2) {
            echo $i . " ";
        }
        $i++;
    } while ($i <= 20);
    ?>
</body>

</html>