<?php

// IF ET LOOP

// for ($i=0; $i <= 10; $i++) {
    
// echo "<br> $i";

//     if ($i % 2 == 0) { // modulo
//     echo ": c'est pair";
//     } else {
//         echo ": c'est impair";
//     }
// }

 // IF ET ELSE :

//  if (false) {
//     echo "Si" ;
//  }else {
//      echo "Sinon";
//  };

// EXO : avoir le même rendu que le code ci-dessous, en changeant le code :
// code de base :
//  for ($i=1; $i <= 10; $i++) {
//      if($i == 5) {
//          echo "<h1>$i</h1>";
//      }else {
//          echo "<p>$i</p>";
//      }
//  }

 // correction :
 
//  for ($i=1; $i <= 10; $i++) {
//     if($i < 5 || $i > 5) {   // || = OU
//         echo "<p>$i</p>";
//     }else {
//         echo "<h1>$i</h1>";
//     }
// }

// TERNAIRE (if/else syntaxe simplifiée) :

    $isConnected = true;

    echo $isConnected ? "Hello Neo" : "Gero" ;
    //                    true          false


