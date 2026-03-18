<?php

include 'produto.php';
include 'carrinho.php';

$prod1 = new Produto('Caneca', 35.90);
$prod2 = new Produto('Camiseta', 79.90);
$prod3 = new Produto('Livro', 49.99);

$carrinho = new Carrinho();
$carrinho->adicionar($prod1);
$carrinho->adicionar($prod2);
$carrinho->adicionar($prod3);

echo "Produtos no carrinho:<br>";
$carrinho->listar();

echo "<br>Total: R$ " . number_format($carrinho->total(), 2, ',', '.');
