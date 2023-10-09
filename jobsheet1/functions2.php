<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functios 2</title>
</head>

<body>
    <h1> Menghitung Luas Lingkaran</h1>
    <form method="post">
        Masukan Jari-Jari :</br>
        <input type="text" name="jari">
        <input type="submit" name="oke">
        <?php
        $r = $_POST["jari"];
        function Lingkaran($r)
        {
            return 3.14 * $r * $r;
        }
        echo "</br> Luas Lingkarannya adalah : " . Lingkaran($r) . "</br>";
        Lingkaran($r);
        ?>
    </form>
</body>

</html>