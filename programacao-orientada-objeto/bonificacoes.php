<?php

require_once 'autoload.php';

use \Alura\Banco\Service\ControladorBonificacoes;
use \Alura\Banco\Modelo\Cpf;
use \Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Gerente, Diretor, EditorVideo};

$umFuncionario = new Desenvolvedor(
    'Vinicius Dias', 
    new Cpf('123.456.789-10'), 
    1000
);

$umFuncionario->subirNivel();

$umaFuncionaria = new Gerente(
    'Paricia', 
    new Cpf('987.654.321-10'), 
    3000
);

$umDiretor = new Diretor(
    'Ana Paula',
    new Cpf('123.591.789-11'),
    5000
);

$umEditor = new EditorVideo(
    'Paulo',
    new Cpf ('456.897.231-11'),
    1500
);

$controlador = new ControladorBonificacoes();
$controlador->adicionarBonificacaoDe($umFuncionario);
$controlador->adicionarBonificacaoDe($umaFuncionaria);
$controlador->adicionarBonificacaoDe($umDiretor);
$controlador->adicionarBonificacaoDe($umEditor);

echo $controlador->getTotal();