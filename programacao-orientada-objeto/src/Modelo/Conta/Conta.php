<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta
{
    private Titular $titular;
    protected float $saldo;
    private static int $numeroContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$numeroContas++;
    }

    public function __destruct()
    {
        self::$numeroContas--;
    }

    public function sacar(float $valorAsacar) : void
    {
        $tarifaSaque = $valorAsacar * $this->percentualTarifa();
        $valorSaque = $valorAsacar + $tarifaSaque;

        if($valorSaque > $this->saldo) {
            echo "saldo indispnível";
            return;
        }
        
        $this->saldo -= $valorSaque;
    }

    public function depositar(float $valorDeposito) : void
    {
        if ($valorDeposito < 0) {
            echo "Você não pode depositar um valor negativo";
            return;
        }

        $this->saldo += $valorDeposito;
    }

    public function getSaldo() : float
    {
        return $this->saldo;
    }

    public function getNomeTitular() : string
    {
        return $this->titular->getNome();
    }

    public function getCpfTitular() : string
    {
        return $this->titular->getCpf();
    }

    public static function getNumeroContas() : int
    {
        return self::$numeroContas;
    }

    abstract protected function percentualTarifa(): float;
}