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
   $Nilai=75;
   $indeks="";
   if (($Nilai >= 80) && ($Nilai <= 100)) {
   $indeks="A";
   }else  if  (($Nilai  >=  65)  &&  ($Nilai  <=  79))  {
   $indeks="B";
   }else  if  (($Nilai  >=  50)  &&  ($Nilai  <=  64))  {
   $indeks="C";
   }else if (($Nilai >= 0) && ($Nilai <= 45)) {
   $indeks="D";
   }else {
   $indeks = "-";
}
echo " Nilai anda adalah " .$Nilai. " dengan indeks " .$indeks;
?>
</body>
</html>
