<?php


$contasCorrentes = [
    '12114530' => ['nome' => 'Eloisa', 'saldo' => 11.000], 
    '55635854' => ['nome' => 'Ezequiel', 'saldo' => 10.000], 
    '87552255' => ['nome' => 'Elis', 'saldo' => 15.000], 
    '00149536' => ['nome' =>'Dawud', 'saldo' => 22.000]
 ];
 
 $contasCorrentes['22558877'] = ['nome' => 'Eze', 'saldo' => 55];
 
 
function exibeMensagem ($mensagem){
    echo $mensagem . PHP_EOL;
};

function sacar(array $conta, float $valorASacar): array 
{
    if ($valorASacar > $conta){
     exibeMensagem("não há grana");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
};

function depositar(array $conta, float $deposito): array 
{
    if ($deposito > 0){
        $conta['saldo'] += $deposito;
    } else {
       echo 'Deposite um volor acima de R$ 0.01'. PHP_EOL;
    }
    return $conta;
} 

$contasCorrentes['22558877'] = sacar($contasCorrentes['22558877'], $valorASacar = 50);

$contasCorrentes['22558877'] = depositar($contasCorrentes['22558877'], $deposito = -100);



foreach ($contasCorrentes as $cpf => $titular) {
    exibeMensagem($cpf ." - ". $titular['nome'] ." - ". $titular['saldo']); 
}
