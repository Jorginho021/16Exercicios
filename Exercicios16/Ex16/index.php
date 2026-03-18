<?php

include 'Produto.php';
include 'Cliente.php';
include 'Pedido.php';

$cliente = new Cliente('Mariana');
$pedido = new Pedido($cliente);

$pedido->adicionarProduto(new Produto('Notebook', 3500.00));
$pedido->adicionarProduto(new Produto('Mouse', 120.00));
$pedido->adicionarProduto(new Produto('Teclado', 199.90));

echo $pedido->resumo();
