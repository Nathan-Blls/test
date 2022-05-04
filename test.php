<?php

// EXERCICE FIZZBUZZ : 

// FAIRE UN FIZZ BUZZ AVEC IF ELSE
// PUIS REFAIRE AVEC SWITCH CASE

// SI MULTIPLE DE 3 - FIZZ
// SI MULTIPLE DE 5 - BUZZ
// SI LES DEUX - FIZZBUZZ
// SI AUCUN JUSTE L’ITÉRATION

// AFFICHER TOUTES LES ITÉRATIONS

// BOUCLE IF ELSE SWITCH COMPARATEUR
// PUIS POUR LES PLUS RAPIDES FAIRE UNE V2 SI VOUS
// AVEZ DES IDÉES.

// % MODULO
// FOR WHILE
// IF SWITCH
// __________________

// AVEC IF ET ELSE :

for ($i=0; $i <= 20; $i++) {                // $i=0 commencer itération à zéro / 
                                            // $i <= 20 : boucle tant que $i n'est pas à 20 
                                            // $i++ incrémentation de 1 à chaque itération

    if (($i % 3 == 0) && ($i % 5 == 0)) {    // si multiples de 3 et 5
      echo "$i - FizzBuzz <br>";             // afficher Fizzbuzz et revenir à la ligne
      } else if ($i % 3 == 0) {              // sinon, si multiples de 3
        echo "$i - Fizz <br>";               // afficher Fizz et revenir à la ligne
        } else if ($i % 5 == 0) {            // sinon, si multiples de 5
          echo "$i - Buzz <br>";             // afficher buzz et revenir à la ligne
          } else {                           // sinon, juste afficher le nombre d'itération et revenir à la ligne
            echo "$i <br>";
          }
        }

        // ________________________
?>

 <br>
 <br>

   <?php
    // AVEC SWITCH CASE :
   for ($i=0; $i <= 20; $i++) {

            echo ($i . " ");               // Affiche le numéro d'itération
            switch (true) {
                case $i % 3 == 0 && $i % 5 == 0:    // cas où multiples de 3 et 5
                    echo " - FIZZBUZZ";
                    break;

                case $i % 3 == 0:    // multiples de 3
                    echo " - FIZZ";
                    break;

                case $i % 5 == 0:    // multiples de 5
                    echo " - BUZZ";
                    break;
            }
        echo "<br><hr>";    // retour à la ligne + séparateur
        }