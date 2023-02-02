<?php

function geraEmail(string $nome): void {
    $conteudoEmail = <<< FINAL
    Olá! $nome!
    
    estamos entrando em contato para
    {motivo do contato}

    {assinatura}

    FINAL;

    echo $conteudoEmail;
}

geraEmail('Vincius Dias');