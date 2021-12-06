<?php
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


for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . " possui " . $contasCorrentes[$i]['saldo'] ." reais de saldo em sua conta." . '<br>';
}
