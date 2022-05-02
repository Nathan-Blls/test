<?php

$phrase = "";

$tabs = ["Vivement", "la", "fin", "de la formation", "!"];

echo $phrase;

for ($i=0; $i < count($tabs); $i++) {
    $phrase.= $tabs [$i] . " ";
}

echo $phrase;