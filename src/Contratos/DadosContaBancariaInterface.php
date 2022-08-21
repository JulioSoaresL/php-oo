<?php

declare(strict_types=1);

namespace App\Contratos;

interface DadosContaBancariaInterface
{
    public function getBanco(): string;
    public function getNomeTitulo(): string;
    public function getNumeroAgencia(): string;
    public function getNumeroConta(): string;
}