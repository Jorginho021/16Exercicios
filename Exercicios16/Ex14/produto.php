<?php

class Produto {
    public $nome;
    public $preco;

    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function __toString() {
        return "{$this->nome} - R$ " . number_format($this->preco, 2, ',', '.');
    }
}