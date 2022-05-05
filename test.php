<?php

// EXERCICE LUNETTES :

// Faire le code qui répond aux questions "combien et qui porte des lunettes"
// idéalement tableau associatif
// V1 : tableau en dur
// V2 : utiliser RANDOM pour générer lunettes ou pas
// V3 : Faire un visuel (card) avec cadre (bordure) en rouge si pas de lunettes
// V4 : Users RANDOM

//V1 alternative : strlength pour dire combien et qui ont tel nombre de lettres dans leur prénom
$classMars = [
  ["name" => "Florian" , "lunettes" => false],
  ["name" => "Emmanuel" , "lunettes" => true],
  ["name" => "Hakim" , "lunettes" => false],
  ["name" => "Tristan" , "lunettes" => false],
  ["name" => "Anis" , "lunettes" => false],
  ["name" => "Laurent" , "lunettes" => false],
  ["name" => "Anthony" , "lunettes" => true],
  ["name" => "Nathan" , "lunettes" => false],
  ["name" => "Kevin" , "lunettes" => false],
  ["name" => "William" , "lunettes" => false],
  ["name" => "Daouda" , "lunettes" => false],
  ["name" => "Hajara" , "lunettes" => false],
  ["name" => "Soufiane" , "lunettes" => false],
  ["name" => "Christopher" , "lunettes" => true],
  ["name" => "Trucmuchebidule" , "lunettes" => true],
];
//V1 alternative : strlength pour dire combien et qui ont tel nombre de lettres dans leur prénom
$court = 0;
$long = 0;

foreach ($classMars as $class) {
        if (strlen($class["name"])<=7) {           // si le nom a - ou égal 7 lettres
            echo ($class["name"]) . " : " . strlen($class["name"]) . " lettres (- ou = 7)" .'<br><hr> '; // montrer prenom : nbre char...
            $court++;     // itération suivante et stocke nbre itérations du cas <=7
          } if (strlen($class["name"])>=8) {         // si le nom a + ou égal 8 lettres
            echo ($class["name"]) . " : " . strlen($class["name"]) . " lettres (+ ou = 8)" .'<br><hr> ';   // montrer prenom : nbre char...
            $long++;       // itération suivante et stocke nbre itérations du cas <=7
          }
      }
    echo "<br>";
    echo "$court personnes ont un prénom de 7 lettres ou moins. <br>";
    echo "$long personnes ont un prénom de 8 lettres ou plus. <br>";

    //_________________________

    // V1 :

// $lunettes=0;
// $nonLunettes=0;

// foreach ($classMars as $class) {
//         if ($class["lunettes"]==true) {
//             echo $class["name"].'<br> ';
//             $lunettes++;
//         }
//         if ($class["lunettes"]==false) {
//             $nonLunettes++;
//         }
//     }
//     echo "<br>";
//     echo "$lunettes personne(s) ont des lunettes. <br>";
//     echo "$nonLunettes personne(s) ont  pas des lunettes. <br>";


//__________________

