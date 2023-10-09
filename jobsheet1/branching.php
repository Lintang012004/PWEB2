<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branching</title>
</head>

<body>
    <h1> Menentukan Jenis Bilangan </h1> </br>
    <form method="post">
        Masukkan Nilai :
        <input type="text" name="nilaiX">
        <input type="submit" name="oke"> </br>
        <?php
        $x = $_POST["nilaiX"];
        echo "Nilai X = $x </br>";
        if ($x > 0) {
            echo "$x merupakan Bilangan Positif";
        } elseif ($x < 0) {
            echo "$x merupakan Bilangan Negatif";
        } else {
            echo "$x merupakan Bilangan Nol";
        }
        ?>
    </form>
</body>

</html>