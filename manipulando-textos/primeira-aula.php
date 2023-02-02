<?php

$nome = 'Vinicius Dias';

$ehDaFamilia = str_contains($nome, 'Dias');

if ($ehDaFamilia) {
    echo "$nome é da minha família" . PHP_EOL;
} else {
    echo "$nome não é da minha família" . PHP_EOL;
}