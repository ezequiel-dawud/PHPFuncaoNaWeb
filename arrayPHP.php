<?php

$conta1 = ['nome' => 'Eloisa', 'saldo' => 11.000];
$conta2 = ['nome' => 'Ezequiel', 'saldo' => 10.000];
$conta3 = ['nome' => 'Elis', 'saldo' => 15.000];
$conta4 = ['nome' =>'Dawud', 'saldo' => 22.000];


$contasCorrentes = [$conta1, $conta2, $conta3, $conta4];



for ($i = 0; $i < count($contasCorrentes); $i++){

    echo $contasCorrentes[$i]['nome'];
    echo $contasCorrentes[$i]['saldo'].PHP_EOL;
}
