<?php

include('contaBancaria.php');

$conta = new ContaBancaria();
$conta->titular = 'Maria';

$conta->depositar(1000);
$conta->mostrarSaldo();

$conta->sacar(300);
$conta->mostrarSaldo();

$conta->sacar(800); // saldo insuficiente
$conta->mostrarSaldo();
