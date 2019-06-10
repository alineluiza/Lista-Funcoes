<?php

function FahrparaCel ($tf) {

    $tc = ($tf -32) * 5/9;
    return $tc;

}

echo "\nDigite a temperatura em Fahrenheit: " ;
$tf = (float)fgets(STDIN);

$tc = FahrparaCel($tf);

echo "$tf Fahrenheit equivalem a $tc ° Celsius \n \n";