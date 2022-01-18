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
$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}