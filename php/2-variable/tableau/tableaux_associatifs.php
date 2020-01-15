<?php
$activites = array(
    "Lundi"=>"Php",
    "Mardi"=>"Javascript", 
    "Mercredi"=>"Typescript",
    "Jeudi"=>"Angular",
    "Vendredi"=>"SQL",
    "Samedi"=>"Python",
    "Dimanche"=>"Tout");
var_dump($activites);

echo"<br>";
foreach ($activites as $key => $valeur) {
    if ($key == 'Dimanche') {
        $activites[$key] = 'NodeJS';
    }
}
var_dump($activites);

echo"<br>";

//deux dimensions
$pierre = array("1"=>"Php","2"=>"Javascript","3"=>"Python");
$paul = array("1"=>"Javascript","2"=>"Css","3"=>"Php");
$jacques = array("1"=>"Java","2"=>"Php","3"=>"Javascript");
$preferences = array($pierre,$paul,$jacques);
var_dump($preferences);

echo"<br>";

//tableau d'association des 3 tableaux
$preferences2 = ["Pierre"=>$pierre, "Paul"=>$paul, "Jacques"=>$jacques];
var_dump($preferences2);

echo"<br>";

print_r(array_count_values($preferences[0])+array_count_values($preferences[1]));
?>