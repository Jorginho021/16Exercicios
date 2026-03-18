<?php

include('produto.php');

$produto = new Produto();
$produto->setPreco(-20);

if ($produto->getPreco() !== null) {
    echo "Preço: R$ " . number_format($produto->getPreco(), 2, ',', '.');
}
