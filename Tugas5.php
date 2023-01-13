<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta  http-equiv="X-UA-Compatible"  content="IE=edge">
<meta  name="viewport"  content="width=device-width,  initial-scale=1.0">
<title>Contoh penggunaan perulangan for</title>
</head>
<body>
<?php
// contoh 1 //
for  ($i=  1;$i  <=  10;  $i++)  {  echo "Contoh 1 : ".$i."<br>";
}
// contoh 2 //
   for  ($i=  1;  ;$i++)  { if ($i > 10) {
break;
}
echo "Contoh 2 : ".$i."<br>";
}
// contoh 3 //
  $i=  1;
  for (; ;) {
  if ($i > 10) { break;
}
  echo "Contoh 3 : ".$i."<br>";
  $i++;
 }
// contoh 4 //
  for  ($i  =  1,  $j  =  0;  $i  <=10  ;  $j  +=$i,  print  $i,  $i++)
?>
</body>
</html>
