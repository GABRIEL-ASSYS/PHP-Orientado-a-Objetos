<?php

namespace Alura\Banco\Modelo\Conta;

class ContaCorrente extends Conta
{
    protected function percentualTarifa(): float
    {
        return 0.05;
    }

    public function transferir(float $valoATransferir, Conta $contaDeDestino): void
    {
        if ($valoATransferir > $this->saldo) {
            echo 'Saldo indisponível!';
            return;
        }

        $this->saca($valoATransferir);
        $contaDeDestino->deposita($valoATransferir);
    }
}