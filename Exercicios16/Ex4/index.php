<?php

include('carro.php');

$carro = new Carro();
$carro->marca = 'Fiat';
$carro->velocidade = 50;

echo "Antes de acelerar:<br>";
$carro->mostrarVelocidade();

$carro->acelerar();

echo "Depois de acelerar:<br>";
$carro->mostrarVelocidade();
