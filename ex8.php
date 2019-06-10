<?php

function dia ($dia) {
    switch ($dia){
        case 1:
            echo "DOM" . "\n";
            break;
        case 2:
            echo "SEG" . "\n";
            break;
        case 3:
            echo "TER" . "\n";
            break;
        case 4:
            echo "QUA" . "\n";
            break;
        case 5:
            echo "QUI" . "\n";
            break;
        case 6:
            echo "SEX" . "\n";
            break;
        case 7:
            echo "SAB" . "\n";
            break;
        default;
            echo "\n Digite um número válido (1 a 7)";
    }
}

echo "Digite um número: ";
$dia = (int)fgets(STDIN);

echo dia ($dia);