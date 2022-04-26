<?php
// LES ARRAY SIMPLES

$fruits = ["fraise","grenade","melon","fakya","abricot"];

// echo $fruits : bug car echo pour "string"

// var_dump : pour débugguer
var_dump($fruits);

echo "<pre>"; // <pre></pre> : pour rendre le visuel plus beau
print_r($fruits);
echo "</pre>";

print_r("Hello");

echo "<br>"; // saut de ligne

echo $fruits [4]; // 4ème élément du tableau = abricot (tableau commence à 0)

echo "<br>";

echo $fruits [4]= "pêche"; // modification du 4ème élément par un autre.

var_dump($fruits); // vérification du changement