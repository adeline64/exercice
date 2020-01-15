<?php
$tab = array(15,22);
$tabCrochets = [15,22];
var_dump($tab);
//affiche un tableau commencant à 0 et allant jusqu'a 1.
// deux valeurs 15 et 22

var_dump($tabCrochets);
//affiche un tableau commencant à 0 et allant jusqu'a 1.
// deux valeurs 15 et 22

$jours = array("Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");
print_r($jours);

echo"<br>";

echo $jours[2];

echo"<br>";
array_push($jours, "dimanche");
print_r($jours);

echo"<br>";
$dimanche = "dimanche";
unset($jours[array_search($dimanche, $jours)]);
print_r($jours);

?>