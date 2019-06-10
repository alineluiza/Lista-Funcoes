<?php

function divisivel ($x,$y) {
        $modulo = $x%$y;

        if ($modulo == 0) {
            return "1 \n";
        }

        else {
            return "0 \n";
        }
}

echo "Digite um número: ";
$x = (int)fgets(STDIN);

echo "Digite outro número: ";
$y = (int)fgets(STDIN);

echo divisivel ($x,$y);