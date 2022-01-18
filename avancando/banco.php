<?php

require_once 'funcoes.php'; //incluindo funcoes de um arquivo externo - Aqui pode ir o include ou require
//require_once incluir apenas uma vez.
$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.789-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];


$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10']
    , 100000);
$contasCorrentes['123.456.789-11'] = sacar(
    $contasCorrentes['123.456.789-11'],
     10);

$contasCorrentes['123.256.789-12'] = depositar(
    $contasCorrentes['123.256.789-12'], 
    900
);

unset ($contasCorrentes['123.456.789-11' ]);
    
titularComLetrasMaiusculas($contasCorrentes['123.256.789-12']);// passagem por referencia. Exemplo. Cuidado. Manipula a variavel.

foreach ($contasCorrentes as $cpf => $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta; // lista compacta
    //exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
    exibeMensagem( "$cpf $titular $saldo"
    );
}