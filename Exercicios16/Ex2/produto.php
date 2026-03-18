<?php

class produto {
    public $nome;
    public $preco;

    public function apresentar() {
        echo "Produto: " . $this->nome . " - Preço: R$ " . number_format($this->preco, 2, ',', '.');
    }
}