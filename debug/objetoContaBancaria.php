<?php

require __DIR__ . '/../vendor/autoload.php';
use App\ContaBancaria;

$conta = new ContaBancaria(
    'NuBank',
    'Júlio Soares',
    '8244',
    '574689-69',
    300
);
echo $conta->sacar(50.50);
echo PHP_EOL;
echo $conta->depositar(500);
echo PHP_EOL;

echo $conta->obterSaldo();
// var_dump($conta->exibirDadosConta());
// var_dump($conta->getBanco());