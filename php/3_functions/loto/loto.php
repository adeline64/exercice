<?php

//echauffement

function tableau(){
    $parametres = array();

    for ($i=0; $i < 49; $i++) { 
        $parametres[]=$i;
    }
    //var_dump($parametres);
    return $parametres;
}

echo '<pre>'.print_r(tableau(),true).'</pre>';

echo"<br>";

// loto

// tirage

$nombres = array();

//boucle for

for ($i=0; $i < 5; $i++) { 
    $nombres[]=mt_rand(1, 49);
    var_dump ($nombres);
}

echo"<br>";
//boucle while

$nombres1 = array();
$chiffre = 0;
while($chiffre<5) {
    $nombres1[]=mt_rand(1, 49);
    $chiffre++;
}
var_dump ($nombres1);

echo"<br>";

function tirage(){
    $chiffre = 0;
    while($chiffre<5) {
        $nombres[]=mt_rand(1, 49);
        $chiffre++;
    }
    return $nombres;
}
echo '<pre>'.print_r(tirage(),true).'</pre>';

echo"<br>";

function tirage2($tailleTableau) {
    //init tabelau de sortie
    $nombres = array();
    //chiffre => compteur
    $compteur = 0;
    while($compteur < $tailleTableau) {
        $nombres[]=mt_rand(1, 49);
        $compteur++;
    }
    return $nombres;
}

echo '<pre>'.print_r(tirage2(11),true).'</pre>';

//champagne

echo"<br>";

$choix = array(1,5,3,15,47);
var_dump($choix);

echo '<pre>'.print_r(tirage(),true).'</pre>'; 
echo '<pre>'.print_r(tirage(),true).'</pre>'; 
echo '<pre>'.print_r(tirage(),true).'</pre>'; 
echo '<pre>'.print_r(tirage(),true).'</pre>';