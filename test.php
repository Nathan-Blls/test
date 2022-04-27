<?php

// BOUCLES

$debut = 0;

while ($debut < 5) {
    echo "<p>Cool !</p>";
    $debut++;
}

$i = 0;

while($i <= 9){
    echo "<p>Cool ! $i </p>";
    $i++;
}

$j = 5;

while($j < 9){
    echo "Cool ! $j";
    $j--;
}

// BOUCLES WHILE et TABLEAU

$users = ["Jean","Marie","Mohamed","John"];

echo "$users[0] $users[1] $users[2] $users[3]";

$a = 0;

while ($a < count($users)) {
    echo "$users [$a] <br>";
    $a++;
}
// BOUCLE FOR

for ($i=0; $i < 10; $i++) {
    echo "Youpi $i <br>";
}