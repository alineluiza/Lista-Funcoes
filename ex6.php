<?php

function contar ($n1,$n2) {
    $soma = 0;
    for ($i=$n1; $i <=$n2 ; $i++) { 
        $soma = $soma + $i;
    }
return $soma;
}


echo "Digite um número: ";
$n1 = (int)fgets(STDIN);

echo "Digite outro número: ";
$n2 = (int)fgets(STDIN);

$soma = contar ($n1,$n2);

echo "A soma do intervalo desses dois números é igual a: $soma \n";

