<?php
$peso = 58;
$altura = 1.79;
$imc = $peso / $altura ** 2;

echo "Seu IMC é: $imc. Você está ";

if ($imc < 18.5) {
    echo "abaixo do peso.";
} elseif ($imc >= 18.5 && $imc <= 24.9) {
    echo "com o peso ideal.";
} elseif ($imc >= 25 && $imc <= 29.9) {
    echo "com sobrepeso.";
} elseif ($imc >= 30 && $imc <= 34.9) {
    echo "com obesidade grau I.";
} elseif ($imc >= 35 && $imc <= 39.9) {
    echo "com obesidade grau II.";
} else {
    echo "com obesidade grau III.";
}
