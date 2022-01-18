<?php

require_once 'src/Conta.php';

/**
 * A ideia é sempre ter propriedades privadas e metodos publicos.
 */



require_once 'src/Conta.php';

$primeiraConta = new Conta('123.456.789-10',  'Daniel Almeida');

$primeiraConta->depositar(500);
$primeiraConta->sacar(300);
$primeiraConta->saldo -= 300;

Conta::recuperaNumeroDeContas();
