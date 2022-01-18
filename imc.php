<?php

$peso = 90;
$altura = 1.74;
$imc = $peso / $altura ** 2;

echo "Seu imc e de $imc . Voce esta com o IMC ";

if ($imc < 18){
    echo "abaixo";

}elseif ($imc < 25){
    echo "dentro";
}else {
    echo "acima";

}

echo " do recomendado";