<?php

$notas = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Vinicius',
        'nota' => 6,
    ],
    [
        'aluno' => 'Ana',
        'nota' => 9,
    ]
];

function ordenaNotas(array $valor1, array $valor2) : int {
    /*if ($valor1['nota'] > $valor2['nota']) {
        return -1;
    }
    if ($valor2['nota'] > $valor21['nota']) {
        return 1;
    }
    return 0;
    toda essa comparação pode ser escrita da seguinte forma:*/

    return $valor2['nota'] <=> $valor1['nota'];
}

usort($notas, 'ordenaNotas');
var_dump($notas);