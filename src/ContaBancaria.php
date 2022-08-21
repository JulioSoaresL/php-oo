<?php

namespace App;

class ContaBancaria
{
    public string $banco = "NuBank";
    public string $nomeTitular = "Júlio Soares";
    public string $numeroAgencia = "8244";
    public string $numeroConta = "57648-69";
    public float $saldo = 0;

    public function exibirDadosConta(): array
    {
        return [
            'banco' => $this->banco,
            'nomeTitular' => $this->nomeTitular,
            'numeroAgencia' => $this->numeroAgencia,
            'numeroConta' => $this->numeroConta,
            'saldo' => $this->saldo,
        ];

        $teste = 'ola amigo';
    }
}   