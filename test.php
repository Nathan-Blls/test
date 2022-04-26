<?php
// LES TABLEAUX MULTIDIMENSIONNELS, 2D 

// $games = [ 
//     ["tarkov", 10, false],
//     ["cod", 100, false], 
//     ["mario", 1, false], 
//     ["cs", 10, true] 
// ];

// var_dump($games);

// var_dump($games[3][0]);

// 3D 

$toto = "Michel";

// $games = [ 
//     ["tarkov", 10, false, ["1v1", "2v2", "3v3"]],
//     ["cod", 100, false], 
//     ["mario", 1, false], 
//     ["cs", 10, true] 
// ];

// var_dump($games[0][3][1]); // = 2v2 car 0 est 1er élément du tableau, 3 le 4ème (autre tableau), et 1 "2v2"

$games [] = ["toto", "tata"];
//$games = "tata";
var_dump($games);

$tab = ["a", 1, 2, true];

$tab[] = false; //ajout à la fin du tableau

var_dump($tab); // a, 1, 2, true, FALSE

$games3D = [
    ["tarkov", 10, false],
    ["cod", 100, false], 
    ["mario", 1, false], 
    ["cs", 10, true, ["MM", "BOMBE","OTAGES"]]
];