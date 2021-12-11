<?php
function sacar($conta, $valorASacar){
    if ($conta['saldo']<$valorASacar){
        exibeMensagem($conta['titular'] . ' ' . 'você está abaixo do limite, não foi possível fazer esse saque!');
    }
    else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function depositar($conta, $valorADepositar)
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        echo $conta['titular'] . ' ' . "valor precisa ser positivo!" . "<br>";
    }
    return $conta;
}

function exibeMensagem($mensagem) {
    echo $mensagem . "<br>";
}

function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']);

}

/*echo "<ul>";
function exibeConta(array $conta){
    ['titular'=>$titular, 'saldo'=>$saldo] = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo.<br></li>";
};
echo "</ul>";
*/