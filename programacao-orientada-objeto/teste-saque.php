<?php

require_once 'autoload.php';

use \Alura\Banco\Modelo\Conta\{Conta, ContaPoupanca, ContaCorrente, Titular};
use \Alura\Banco\Modelo\{Cpf, Endereco};

$conta = new ContaCorrente(
    new Titular(
        new Cpf('123.456.789-10'), 
        'Vinicius Dias', 
        new Endereco('Petrópolis', 'Bairro Teste', 'Rua lá', '37')
    )
);

$conta->transferir();
$conta->depositar(500);
$conta->sacar(100);

echo $conta->getSaldo() . PHP_EOL;