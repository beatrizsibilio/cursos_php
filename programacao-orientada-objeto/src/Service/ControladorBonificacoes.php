<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControladorBonificacoes
{
    private int $totalBonificacoes = 0;

    public function adicionarBonificacaoDe(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calcularBonificacao();
    }

    public function getTotal() : float
    {
        return $this->totalBonificacoes;
    }
}