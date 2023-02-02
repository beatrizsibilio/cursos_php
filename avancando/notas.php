<?php

$notas = [
    'Vinicius' => null,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

krsort($notas);
var_dump($notas);

if (is_array($notas)) {
    echo "sim, é um array" . PHP_EOL;
};

//array_is_list($notas);

echo 'Vinicius fez a prova:' . PHP_EOL;
var_dump(isset($notas['Ana']));

echo 'Alguém tirou 10?' . PHP_EOL;
var_dump(in_array(10, $notas));

echo 'Quem tirou 10?' . PHP_EOL;
var_dump(array_search(6, $notas));