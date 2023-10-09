<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>

<body>
    <?php
    function persegi_panjang($p, $l)
    {
        return $p * $l;
    }

    function lingkaran($r)
    {
        return 3.14 * $r * $r;
    }
    echo "Luas Persegi Panjang = " . persegi_panjang(5, 2) . "</br>";
    echo "Luas Lingkaran = " . lingkaran(7) . "</br>";
    ?>
</body>

</html>