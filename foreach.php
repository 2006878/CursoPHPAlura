<?php
$conta1 = [
    'nome' => 'João',
    'idade' => 20
];
$conta2 = [
    'nome' => 'Maria',
    'idade' => 25
];
$conta3 = [
    'nome' => 'José',
    'idade' => 30
];
$conta4 = [
    'nome' => 'Pedro',
    'idade' => 35
];
$conta5 = [
    'nome' => 'Ana',
    'idade' => 40
];
$contasCorrentes = [$conta1, $conta2, $conta3, $conta4, $conta5];
/*
$contasCorrentes = array(
    array(
        'titular' => 'João',
        'saldo' => 1000
    ),
    array(
        'titular' => 'Maria',
        'saldo' => 7500
    ),
    array(
        'titular' => 'Pedro',
        'saldo' => 10000
    ),
    array(
        'titular' => 'Ana',
        'saldo' => 2500
    )
);

foreach ($contasCorrentes as $conta) {
    echo $conta['titular'] . ' possui saldo de ' . $conta['saldo'] . " reais." . '<br>';
}*/
foreach ($contasCorrentes as $conta) {
    echo $conta['nome'] . ' tem ' . $conta['idade'] . " anos de idade." . '<br>';
}
