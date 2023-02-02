<?php

$altura = 1.68;
$peso = 70;

$imc = $peso / ($altura ** 2);

echo "Seu IMC é $imc e está ";

if ($imc < 18.5) {
    echo "abaixo";
} else if ($imc < 25) {
    echo "dentro";
} else {
    echo "acima";
}

echo " do recomendado" . PHP_EOL;