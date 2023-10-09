<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Manipulation</title>
</head>

<body>
    <?php
    $date = "09-10-2023";
    $x = "Selamat belajar PHP!";
    echo strtoupper($x);
    echo "</br>";
    echo strtolower($x);
    echo "</br>";
    echo substr($x, 0, 7) . "</br>";
    echo substr($date, 0, 2);
    ?>
</body>

</html>