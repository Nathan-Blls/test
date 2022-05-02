<?php

// SWITCH CASE

// $i = 0;

// if ($i ==0) {
//     echo "i égal 0";
// }elseif ($i == 1) {
//     echo "i égal 1";
// }elseif ($i == 2) {
//     echo "i égal 2";
// }

$i = 0;

switch ($i) {
        case 0:   // si i = 0 >> va afficher "i égal 0"
        echo "i égal 0";
        break;

            case 1:
            echo "i égal 1";
            break;

                case 2:
                echo "i égal 2";
                break;

                    default:
                    echo "i n'est ni égal à 2, ni à 1, ni à 0.";
}