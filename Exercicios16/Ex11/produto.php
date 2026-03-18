<?php

class Produto {
    public $nome;
    public $preco;

    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function aplicarDesconto($percentual) {
        if (!is_numeric($percentual) || $percentual < 0 || $percentual > 100) {
            echo "Percentual inválido. Deve ser 0-100.<br>";
            return;
        }

        $this->preco -= $this->preco * ($percentual / 100);
    }

    public function mostrar() {
        echo "Produto: {$this->nome} - Preço: R$ " . number_format($this->preco, 2, ',', '.') . "<br>";
    }
}