<?php
//arrays associativas
$conta1 = [
    'titular' => 'Vinicius',
    'saldo' => 500
];

$conta2 = [
    'titular' => 'Maria',
    'saldo' => 1000
];

$conta3 = [
    'titular' => 'Carlos',
    'saldo' => 2000
];


$contasCorrentes = [
    $conta1, 
    $conta2,
    $conta3
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}