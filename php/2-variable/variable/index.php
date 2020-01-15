<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    
        $hello = "Hello"; 
        //1) Afficher la variable $hello//
        echo $hello;
        // chaine de caractère

    ?>
        <br>
    <?php

        $world = "World";

        $hw = $hello . ", ".$world ." !";
        //afficher hello world
        echo $hw;
?>
<br>
<?php
        echo"montant HT : ";
        $montantHt = 15.2;
        echo"le montant ht est de ".$montantHt;
?>
<br>
<?php
    echo"montant TTC : ";
    $montantTTC = $montantHt*1.2;
    echo "le montant TTC est de " .$montantTTC;

    ?>
</body>
</html>