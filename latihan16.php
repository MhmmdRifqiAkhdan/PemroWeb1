<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Script PHP</title>
</head>
<body>
    <h3>Contoh Penggunaan Operator Perbandingan</h3>
    <?php
    $bill = 2000;
    $bil2 = 20;
    $teks1 = "PHP";
    $teks2 = "php";

    $hasil = $bill == $bil2;
    echo "$bill == $bil2 =$hasil<br>";
    $hasil = $bill != $bil2;
    echo "$bill != $bil2 =$hasil<br>";
    $hasil = $bill >= $bil2;
    echo "$bill >= $bil2 =$hasil<br>";
    $hasil = $teks1 == $teks2;
    echo "$teks1 == $teks2 =$hasil<br>";
    $hasil = $teks1 != $teks2;
    echo "$teks1 != $teks2 =$hasil<br>";
   
    ?>
    
</body>
</html>