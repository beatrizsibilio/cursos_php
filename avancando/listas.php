<?php
// forma antiga de escrever array -> $idadeList = array(21, 23, 19, 25, 30, 41, 18);
$idadeList = [21, 23, 19, 25, 30, 41, 18];
$idadeList[] = 20;

list($idadeVinicus, $idadeJoao, $idadeMaria) = $idadeList;

foreach($idadeList as $idade) {
    echo $idade . PHP_EOL;
}