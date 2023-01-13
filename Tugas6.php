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
     $people = array(
     array('name'  =>  'kale',  'salt'  =>  856421), array('name'  =>  'piere',  'salt'  =>  215863),
);
     for  ($i  =  0,$size  =  count($people);  $i  <$size;  ++$i)  {
     $people[$i]['salt']  =  mt_rand(000000,999999);
     echo  $i.  "  ".$people[$i]['name'].  "  "  .$people  [$i]['salt'].  "<br>";
}
?>

</body>
</html>
