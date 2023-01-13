<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Script PHP</title>
</head>
<body>
    <h1>Contoh Penggunaan Operator</h1>
    <?php
    $bilangan1 = 10;
    $bilangan2 = 3;

    $hasil = $bilangan1 + $bilangan2;
    echo "$bilangan1 + $bilangan2 =$hasil<br>";
    $hasil = $bilangan1 - $bilangan2;
    echo "$bilangan1 - $bilangan2 =$hasil<br>";
    $hasil = $bilangan1 * $bilangan2;
    echo "$bilangan1 * $bilangan2 =$hasil<br>";
    $hasil = $bilangan1 / $bilangan2;
    echo "$bilangan1 / $bilangan2 =$hasil<br>";
    $hasil = $bilangan1 % $bilangan2;
    echo "$bilangan1 % $bilangan2 =$hasil<br>"; 
    ?>
    
</body>
</html>