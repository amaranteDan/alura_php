<?php



function exibeMensagem(string $mensagem){
    echo $mensagem . PHP_EOL;
}

function sacar(array $conta, float $valorASacar) : array
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não tem saldo suficiente!" . $conta['titular']);
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}
function depositar(array $conta, float $valorADepositar) : array{
    if ($valorADepositar > 0){
        $conta['saldo'] += $valorADepositar;
        
    }else{
        exibeMensagem("Depositos precisam ser positivos");
    }
    return $conta;
}

function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']);
}