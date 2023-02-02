<?php

use Alura\Banco\Modelo\{Cpf, Endereco};
use Alura\Banco\Service\Autenticador;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Funcionario\{Diretor, Gerente};

require_once 'autoload.php';

$autenticador = new Autenticador();

$umDiretor = new Diretor(
    'João da Silva',
    new Cpf('123.456.789-10'),
    10000
);

$umTitular = new Titular(
    new Cpf('123.987.456-12'), 
    'abcdeg', 
    new Endereco('A', 'B', 'C', '1D')
);

$autenticador->tentarLogin($umTitular, 'abcd');