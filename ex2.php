<?php

function hipotenusa ($catA,$catB) {

    $hip = sqrt($catA**2 + $catB**2);
    return $hip;

} 

echo "\nInforme o primeiro cateto: ";
$catA = (float)fgets(STDIN);

echo "Informe o segundo cateto: ";
$catB = (float)fgets(STDIN);

$hip = hipotenusa($catA,$catB);

echo "\n O valor da hipotenusa é igual a: $hip \n \n";
