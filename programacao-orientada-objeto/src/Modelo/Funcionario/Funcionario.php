<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\{Pessoa, Cpf};

abstract class Funcionario extends Pessoa
{
    private float $salario;

    public function __construct(string $nome, Cpf $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function setNome(string $nome) : void
    {
        $this->validarNome($nome);
        $this->nome = $nome;
    }

    public function getSalario () : float
    {
        return $this->salario;
    }

    public function receberAumento(float $valorAumento) : void
    {
        if($valorAumento < 0 ) {
            echo "Aumento deve ser positivo" . PHP_EOL;
            return;
        }
        $this->salario += $valorAumento;
    }

    abstract public function calcularBonificacao() : float;
}