<?php

class Pedido {
    public $cliente;
    private $produtos = [];

    public function __construct(Cliente $cliente) {
        $this->cliente = $cliente;
    }

    public function adicionarProduto(Produto $produto) {
        $this->produtos[] = $produto;
    }

    public function calcularTotal() {
        $total = 0;
        foreach ($this->produtos as $produto) {
            $total += $produto->preco;
        }
        return $total;
    }

    public function resumo() {
        $texto = "Resumo do pedido para {$this->cliente}:<br>";
        $texto .= "Produtos:<br>";

        foreach ($this->produtos as $produto) {
            $texto .= "- {$produto}<br>";
        }

        $texto .= "Total: R$ " . number_format($this->calcularTotal(), 2, ',', '.') . "<br>";
        return $texto;
    }
}