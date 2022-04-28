<?php
// DO WHILE : sert à éxécuter une action puis controler la condition

// $i = 0;
// do {
//     echo "<p> DO WHILE </p>";
//     $i++;
// } while (false);

//BOUCLE IMBRIQUEE

// $tabs = [ [1,2,3] , [3,4,5] ];

// var_dump($tabs);

// // echo count($tabs[0]); // le 1er tableau de tabs de la 1ère dimension a 3 éléments
// // echo count($tabs[1]); // le 2e tableau de la 1ere dimension a 4 éléments

// $i = 0;
// while ($i < count($tabs)) {
//     $j= 0;
//     while ($j < count($tabs[$i] ) ) {
//         # code...
//         $j++;
//     }
//     $i++;
// }

// QUIZZ : qu'est-ce qui va être affiché ?
// EXERCICE 1
$i = 2;   // i = 2
do {      // le "do" éxecute l'action dans les {}
    $i+=2;    // action -> ajouter 2 à i (2+2=4)
} while ($i < 5);   // "tant que" i est plus petit que 5, "nouveau tour, retour en haut" -> ajout de +2 -> fin de la boucle
echo $i;   // affiche combien est i
echo "<br>";  

// REPONSE 6

// EXERCICE 2

$i = 6;
do {
    $i = $i*2;
} while ($i <= 5);
echo $i;
echo "<br>";
// REPONSE 12

// EXERCICE 3 que va afficher le dernier echo ?
$i = 0;
while ($i < 4) {
    echo $i . "<br>";
    $i++;
}
// REPONSE 3

// EX 4 : Que va afficher le echo à la 3ème itération ?
$i = 0;
while ($i < 4) {
    $i++;
    echo $i . "<br>";
}
//rep 3

