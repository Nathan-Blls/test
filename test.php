<?php

// FONCTIONS

function lanceRoquette (){    // on créé la fonction
    echo "La violence c'est mal";   // on lui dit quoi faire
}

// lanceRoquette();  >> affiche "La violence c'est mal"

function peace (){     // la fonction paix va appeller une autre fonction
    lanceRoquette();
}

// peace(); >> affiche "La violence c'est mal"
// __________________

function salut($name){
    echo "<p>Hello " . $name . " my friend !</p>";
}
salut("Calogero");
salut("Mickael");
salut(12);

function tourName($tour,$prenom){
    echo "<ul>";
    for ($i=0; $i < $tour ; $i++){
        echo "<li> Toto $i - $prenom</li>";
    }
    echo "</ul>";
}

tourName(3,"Bob");
tourName(6, "Revolver");

// tourName(); bug car pas d'arguments !

function multiplication($nb, $nb2){
   return $nb * $nb2;       // renvoie le résultat, à coupler avec echo pour l'afficher
}

// // echo multiplication(2,3);   // 3*2 = 6

// $resultat = multiplication(2,3);

// // echo $resultat;

// multiplication($resultat, multiplication(2,3));

// echo $resultat;