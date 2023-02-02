<?php

function exibeMensagem(string $mensagem)
{
    echo $mensagem . '<br>';
}

function sacar (array $conta, float $valorSaque) : array
{
    if($valorSaque > $conta ['saldo']) {
        exibeMensagem("Você não pode sacar essa quantia");
    } else {
        $conta ['saldo'] -= $valorSaque; 
    }

    return $conta;
}

function depositar (array $conta, float $valorDeposito) : array
{
    if($valorDeposito > 0) {
        $conta['saldo'] += $valorDeposito;
    } else {
        exibeMensagem ("Você não pode depositar um valor negativo");
    }
    return $conta;
}

function titularMaiusculo (array &$conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']);
}

function exibeConta (array $conta) 
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular Saldo: $saldo</li>";
}