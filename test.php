Opérations arithmétiques :
<br>
<br>
<?php

$a = 2;
$b = 1;

echo $a + $b;
echo "<br>";
echo $b - $a ;
echo "<br>";
echo $a+=3;
echo "<br>";
echo $b-=1;
echo "<br>";
echo $a*2;
echo "<br>";
echo $a + $b ;
echo "<br>";
echo $b=+4;
echo "<br>";
echo $a + $b ;
echo "<br>";
echo ($a + $b)*$a;

echo "<br>";
echo "<br>";

$nb = 5;
$nb+=10; //15
$nb+=15; //30

// echo $nb;

$text= "Ceci est un texte";

$mot = "gros mot";


echo "<br>";

$userName = "Bob";
$a = 4;
$b = 3;
$c = "<br>";

echo "Bonjour, je m'appelle "; echo $userName; echo " !";
echo $c;
echo "J'ai "; echo $b; echo $a; echo " ans !";
echo $c;
echo "J'habite au "; echo $b; echo ($a+$b); echo " boulevard National";

echo "<br>";
echo "<br>";

// Concaténation :

echo "Bonjour, je m'appelle ". $userName . " !" . $c . "J'ai " . $b.$a . " ans !" . $c . "J'habite au " .$b . 7 . " boulevard national";
?>

