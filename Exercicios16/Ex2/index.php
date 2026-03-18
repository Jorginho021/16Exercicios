<?php

include('produto.php');

$produto1 = new produto();
$produto1->nome = 'Notebook';
$produto1->preco = 3500;
$produto1->apresentar();
