<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{Conta, Titular};
use Alura\Banco\Modelo\{Pessoa, Cpf, Endereco};
use Alura\Banco\Modelo\Funcionario;

$endereco = new Endereco('Petrópolis', 'um bairro', 'minha rua', '71B');
$primeiroCpf = new Cpf('123.456.789-10');
$primeiroTitular = new Titular($primeiroCpf, 'Beatriz Sibilio', $endereco);
$primeiraConta = new Conta($primeiroTitular);

$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

var_dump($primeiraConta);

echo $primeiraConta->getSaldo() . PHP_EOL;
echo $primeiraConta->getNomeTitular() . PHP_EOL;
echo $primeiraConta->getCpfTitular() . PHP_EOL . PHP_EOL;

$segundaConta = new Conta(new Titular(new Cpf('987.654.321-10'),'Elaine Sibilio', new Endereco('Petrópolis', 'um bairro', 'minha rua', '71B')));

var_dump($segundaConta);

echo $segundaConta->getSaldo() . PHP_EOL;
echo $segundaConta->getCpfTitular() . PHP_EOL;
echo $segundaConta->getNomeTitular() . PHP_EOL . PHP_EOL;

$outra = new Conta(new Titular(new Cpf('123.987.456-12'), 'abcdeg', new Endereco('A', 'B', 'C', '1D')));

unset($segundaConta);

echo Conta::getNumeroContas() . PHP_EOL;

$umFuncionario = new Funcionario('Vinicius', new Cpf('123.456.789-10'), 'Desenvolvedor');
var_dump($umFuncionario);