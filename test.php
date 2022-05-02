<?php

// IF STRUCTURE DE CONTROLE

// if (2 < 5) {
//     echo "truc";
// }

// ISSET
// sert à contrôler et rendre TRUE un FALSY / vérifie si variable est déclarée et pas null
// exemple :

// $truc="0";
// var_dump(isset($truc)); //affiche true au lieu de false (au lieu de rien)

// EMPTY
// sert à voir si variable est vide. vide = "" / 0 / 0.0 / "0" / null / false / array() (tableau vide) / $var; (variable déclarée mais pas de valeur)
// exemple :

// var_dump(empty($truc)); // true au lieu de false

// _______________________ 

$user = ["pseudo" => "blob", "email" => "bob@gmail.com"];

if (!empty($user["mdp"])) {
    echo "<h1>OK</h1>";
}
// = false
//_________

if (!isset($user["mdp"])) {
    echo "<h1>OK</h1>";
}
// = true
// ____________

$user = ["pseudo" => "blob", "email" => "bob@gmail.com", "age => null"];

if (isset($user["age"])) {
    echo "<h1>OK</h1>";
}
// = false
// ___________

if (empty($user["age"])) {
    echo "<h1>OK</h1>";
}
// = true
//____________
