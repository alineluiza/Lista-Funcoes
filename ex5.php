<?php

function poligono ($lados,$tam) {
    if ($lados == 3) {
        $tipo = "Triangulo";
        $perimetro = $lados * $tam;
        return $poligono = [$perimetro,$tipo];
    }

    elseif ($lados == 4) {
        $tipo = "Quadrado";
        $area = $tam ** 2;
        return $poligono = [$area,$tipo];
    }

    elseif ($lados == 5) {
        $tipo = "Pentágono";
        return $tipo;
    }
}

echo "Informe a quantidade de lados; ";
$lados = (int)fgets(STDIN);

if ($lados == 5) {
    $poligono = poligono ($lados, 0);
    echo "$poligono \n";
}

else {
    echo "Informe a medida de um dos lados: ";
$tam = (float)fgets(STDIN);

$poligono = poligono ($lados,$tam);

echo $poligono[0] . " centímetros. " . $poligono[1] . "\n";
}


