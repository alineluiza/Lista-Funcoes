<?php

function media ($n1,$n2) {

    $media = ($n1 + $n2)/2;
    return $media;
}

echo "Informe a primeira nota do aluno: ";
$n1 = (float)fgets(STDIN);

echo "Informe a segunda nota do aluno: ";
$n2 = (float)fgets(STDIN);

$media = media ($n1,$n2);

if ($media >= 6) {
    echo "Sua média foi: $media,PARABÉNS! Você foi aprovado! \n";
}

else {
    echo "Sua média foi $media, você foi reprovado. \n";
}


