<?php

require __DIR__ . '/../vendor/autoload.php';

use App\ContasTipo\ContaCorrente;

$conta = new ContaCorrente(
    'NuBank',
    'Júlio Soares',
    '8244',
    '54779-69',
    300
);

echo $conta->obterSaldo();
echo PHP_EOL;

echo $conta->depositar(50);
echo PHP_EOL;

echo $conta->obterSaldo();
echo PHP_EOL;

echo $conta->sacar(30);
echo PHP_EOL;

echo $conta->obterSaldo();
echo PHP_EOL;