<?php

class Conta {
    public $saldo;

    public function verSaldo() {
        echo "Saldo: R$ " . number_format($this->saldo, 2, ',', '.');
    }
}