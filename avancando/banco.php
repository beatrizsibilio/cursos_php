<?php
require_once 'funcoes.php';

$contasCorrentes = [
    "123.456.789-10" => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ], 
    "123.456.489-11" => [
        'titular' => 'Maria',
        'saldo' => 10000
    ], 
    "123.256.789-10" => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

$contasCorrentes['123.456.489-11'] = sacar($contasCorrentes['123.456.489-11'], 500);
$contasCorrentes['123.256.789-10'] = sacar($contasCorrentes['123.256.789-10'], 200);

$contasCorrentes['123.456.789-10'] = depositar($contasCorrentes['123.456.789-10'], 100);

unset($contasCorrentes['123.256.789-10']);

titularMaiusculo($contasCorrentes['123.456.789-10']);

/*echo "<ul>";
foreach ($contasCorrentes as $cpf => $conta) {
    antiga representação do list:
    list('titular' => $titular, 'saldo' => $saldo) = $conta; 
    agora o list pode ser representado como está abaixo
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    exibeMensagem("$cpf $titular $saldo");

    exibeConta($conta);
}
echo "</ul>";*/
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Document</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Contas correntes</h1>
        <dl>
            <?php
            foreach($contasCorrentes as $cpf => $conta) {  /*sinal de <?= substitui "<? php echo"*/ ?>
            <dt>
                <h3><?= $conta['titular'] ?> - <?= $cpf; ?></h3>
            </dt>
            <dd>
                Saldo: <?= $conta['saldo']; ?>
            </dd>
            <?php } ?>
        </dl>
    </body>
</html>