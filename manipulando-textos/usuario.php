<?php

$nome = 'Vinícius Dias';
$email = ' vinicius@alura.com.br ';
$senha = 'áéíóú';

echo mb_strlen($senha) . PHP_EOL;

if (mb_strlen($senha) < 8) {
    echo 'Senha insegura' . PHP_EOL;
}

$posicaoArroba = strpos($email, '@');

$usuario = substr($email, 0, $posicaoArroba);

echo mb_strtoupper($usuario) . PHP_EOL;

echo substr($email, $posicaoArroba + 1) . PHP_EOL;

[$nome, $sobrenome] = explode(' ', $nome);

echo "Nome: $nome" . PHP_EOL;
echo "Sobrenome: $sobrenome" . PHP_EOL;

$csv = 'Vinicius Dias, 24, vinicius@alura.com.br';

var_dump(explode(',', $csv));

[$nome, $idade, $email] = explode(',', $csv);
echo "Nome: $nome" . PHP_EOL;
echo "Idade: $idade" . PHP_EOL;
echo "Email: $email" . PHP_EOL;

echo trim($email) . PHP_EOL;