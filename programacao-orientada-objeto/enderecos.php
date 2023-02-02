<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Endereco;

$umEndereco = new Endereco('Petrópolis', 'Bairro Qualquer', 'Minha Rua', '71B');
$outroEndereco = new Endereco('Rio', 'Centro', 'Uma Rua Aí', '50');
$umEndereco->numero = "Novo numero";

echo $umEndereco . PHP_EOL;
echo $outroEndereco . PHP_EOL;


echo $umEndereco->numero;