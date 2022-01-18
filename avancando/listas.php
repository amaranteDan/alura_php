<?php

$idadesList = [21, 23, 19, 30, 41, 18];

unset ($idadesList[4]); //remover um item da lista 

$primeiraIdade = $idadesList[3];

list($idadeVinicius, $idadeJoao, $idadeMaria) = $idadesList;

foreach ($idadesList as $idade){
    echo $idade . PHP_EOL;
}


