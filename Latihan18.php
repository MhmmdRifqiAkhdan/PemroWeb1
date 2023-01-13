<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
</head>

<body>
    <h1>Menghitung Volume Balok</h1>
    <?php
    $teks1 = "Belajar Menghitung";
    $teks2 = "Volume Balok";
    echo "teks1 $teks2 <br>";

    // Konstanta untuk nilai judul
    define("Judul", "Hitung Volume Balok");
    // Konstanta untuk nilai
    define("panjang", 10);
    define("lebar", 7);
    define("tinggi", 15);

    $p = 10;
    echo "Panjang = $p<br>";
    $l = 7;
    echo "Lebar = $l<br>";
    $t = 15;
    echo "Tinggi = $t<br>";

    // Rumus
    $volume = $p * $l * $t;
    echo "Volume Balok = $volume";
    ?>

</body>

</html>
