<?php

namespace Alura\Banco\Modelo;

final class Endereco
{
    use AcessoPropriedades;

    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct (string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function getCidade () : string
    {
        return $this->cidade;
    }

    public function setCidade (string $cidade) : string
    {
        return $this->cidade = $cidade;
    }

    public function getBairro () : string
    {
        return $this->bairro;
    }

    public function setBairro (string $bairro) : string
    {
        return $this->bairro = $bairro;
    }

    public function getRua () : string
    {
        return $this->rua;
    }

    public function setRua (string $rua) : string
    {
        return $this->rua = $rua;
    }

    public function getNumero () : string
    {
        return $this->numero;
    }

    public function setNumero (string $numero) : string
    {
        return $this->numero = $numero;
    }

    public function __toString() : string
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }

    public function __set(string $nomeAtributo, string $novoValor)
    {
        $metodo = 'set' . ucfirst($nomeAtributo);
        return $this->$metodo($novoValor);
    }
}