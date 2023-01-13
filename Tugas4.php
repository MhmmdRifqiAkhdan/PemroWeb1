<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta  http-equiv="X-UA-Compatible"  content="IE=edge">
<meta  name="viewport"  content="width=device-width,  initial-scale=1.0">
<title>Contoh  penggunaan  statement  if</title>
</head>
<body>
<?php
$nilai=5;
switch ($nilai) { case  0:
   $terbilang = "NOL"; break;
case  1:
   $terbilang  =  "SATU"; break;
case  2:
   $terbilang  =  "DUA"; break;
case  3:
    $terbilang = "TIGA"; break; 
case  4:
    $terbilang  =  "EMPAT"; break;
    case  5:
    $terbilang = "LIMA"; break;
    deafult:
    $terbilang = "Tidak Ada Nilai";
    }
    echo " Bentuk terbilang dari angka $nilai adalah $terbilang";
    ?>
    </body>
    </html>
    