<?php

$idadeList = [21, 23, 19, 25, 30, 41, 18];
$nomeList = ["João", "Maria", "Pedro", "Ana"];

//count($idadeList) -> conta quantos itens tem a lista

for($i = 0; $i < count($idadeList); $i++) {
    echo $idadeList[$i] . PHP_EOL;
}

for ($i = 0; $i < count($nomeList); $i++) {
    echo $nomeList[$i] . PHP_EOL;
}