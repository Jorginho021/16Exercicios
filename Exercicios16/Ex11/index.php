<?php

include('produto.php');

$produto = new Produto('Teclado', 150.00);
$produto->mostrar();

$produto->aplicarDesconto(20);
$produto->mostrar();
