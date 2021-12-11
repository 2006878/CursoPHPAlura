<?php

#$idadeLista = [21,22,19,25,27,47,13,35];
$idadeLista = array(21,22,19,25,27,47,13,35);
/*$primeiraIdade = $idadeLista[0];
echo $idadeLista[5];

for ($i=0; $i < count($idadeLista); $i++) {
    echo $idadeLista[$i]."<br>";
}*/
list($primeiraIdade, $segundaIdade, $terceiraIdade) = $idadeLista;
echo "Primeira Idade: $primeiraIdade.<br>";
echo "Segunda Idade: $segundaIdade.<br>";
echo "Terceira Idade: $terceiraIdade.<br>";