<?php

require_once 'funcoes.php';

/*function adiciona2($x){
    return $x +2;
}

$resultado = adiciona2(8);
echo $resultado;
exit();
*/
 $contasCorrentes = [
     '123.456.789-10' => [
         'titular' => 'Maria',
         'saldo' => 1000
     ],
     '123.456.789-11' => [
         'titular' => 'Pedro',
         'saldo' => 500
     ],
     '123.456.789-12' => [
         'titular' => 'Ana',
         'saldo' => 1500
     ]
 ];
/*
titularComLetrasMaiusculas($contasCorrentes['123.456.789-12']);

$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 500);
$contasCorrentes['123.456.789-11'] = sacar($contasCorrentes['123.456.789-11'], 2500);
$contasCorrentes['123.456.789-12'] = depositar($contasCorrentes['123.456.789-12'], 800);
$contasCorrentes['123.456.789-12'] = depositar($contasCorrentes['123.456.789-12'], -1000);
*/
//unset($contasCorrentes['123.456.789-12']);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Banco PHP</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta){ ?>
        <dt><h3><?=$conta['titular']?>, - <?=$cpf?></h3></dt>
            <dd><h5>Saldo: <?=$conta['saldo']?>;</h5></dd>
        <?php } ?>
    </dl>
</body>
</html>
