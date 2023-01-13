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
     $people  =  array  ("a"=>1,  "b"=>2,  "c"=>3,  "d"=>4);
     $orang  =  array  (1,2,3,4);
     foreach ($people as $key => $value){ echo  "$key  =>  $value  <br>  ";
}
     echo  "Jumlah  Array  :  ".count($people).  "<br>";

     foreach ($orang as $key => $value){ echo  "$key  =>  $value  <br>  ";
}
?>
</body>
</html>