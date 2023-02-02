<?php

$alunos = [
    'Maria' => [
        'idade' => 12,
        'serie' => '7º ANO',
        'telefone' => [
            'teleone1' => 123456789,
            'teleone2' => 987654321,
        ]
    ],
    'João' => [
        'idade' => 13,
        'serie' => '8º ANO',
        'telefone' => [
            'teleone1' => 223456789,
            'teleone2' => 997654321,
        ]
    ],
    'Bruna' => [
        'idade' => 17,
        'serie' => '3º ANO E.M',
        'telefone' => [
            'teleone1' => 333456789,
            'teleone2' => 887654321,
        ]
    ]
];

foreach ($alunos as $nome => $informacoes) {
    echo $nome . PHP_EOL;
    foreach ($informacoes as $tipoInformacao => $dadoInformacao) {
         echo $tipoInformacao . ": " . $dadoInformacao . PHP_EOL;

         if ($tipoInformacao == 'telefone'){
             foreach ($dadoInformacao as $telefone => $numero) {
                echo $numero . PHP_EOL;
            }
        }
    }
}