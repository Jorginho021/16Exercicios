<?php

class ContaBancaria {
    public $titular;
    public $saldo = 0;

    public function depositar($valor) {
        if (!is_numeric($valor) || $valor <= 0) {
            echo "Valor de depósito inválido.<br>";
            return;
        }

        $this->saldo += $valor;
    }

    public function sacar($valor) {
        if (!is_numeric($valor) || $valor <= 0) {
            echo "Valor de saque inválido.<br>";
            return;
        }

        if ($valor > $this->saldo) {
            echo "Saldo insuficiente para saque.<br>";
            return;
        }

        $this->saldo -= $valor;
    }

    public function mostrarSaldo() {
        echo "Titular: {$this->titular}<br>Saldo: R$ " . number_format($this->saldo, 2, ',', '.') . "<br>";
    }
}