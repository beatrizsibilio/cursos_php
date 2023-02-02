<?php

/*$carro = [
    'placa' => 'LMS-2312',
    'marca' => 'VW',
    'modelo' => 'Golf'
];

foreach ($carro as $tipoDado => $dados){
    echo $tipoDado . " " . $dados . PHP_EOL;
}
echo PHP_EOL;*/

$carros = [
    'LMS-2312' => [
        'marca' => 'VW',
        'modelo' => 'Golf'
    ],
    'BDM-2312' => [
        'marca' => 'VW',
        'modelo' => 'Golf'
    ]
];

foreach ($carros as $placa => $dadosCarro){
    echo $placa . ": " . $dadosCarro['marca'] . " " . $dadosCarro['modelo'] . PHP_EOL;
}