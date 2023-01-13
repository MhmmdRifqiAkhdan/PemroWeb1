<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //buat class laptop 
    class laptop {

    //buat property untuk class laptop 
    var $pemilik;

    //buat method untuk class laptop
    function hidupkan_laptop() {
        return "Hidupkan Laptop";
    }
    }

    //buat objek dari class laptop (instansiasi)
    $laptop_anto = new laptop();
    $laptop_andi = new laptop();
    $laptop_dina = new laptop();

    //set property
    $laptop_anto -> pemilik = "Anto";
    $laptop_andi -> pemilik = "Andi";
    $laptop_dina -> pemilik = "Dina";

    //tampilan property 
    echo $laptop_anto -> pemilik; //Anto
    echo "<br />";
    echo $laptop_anto -> pemilik; //Andi
    echo "<br />";
    echo $laptop_anto -> pemilik; //Dina
    echo "<br />";

    ?>


   ?>
</body>
</html>