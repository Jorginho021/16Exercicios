<?php

class Produto {
    private $preco;

    public function setPreco($preco) {
        if (!is_numeric($preco)) {
            echo "Erro: preço deve ser numérico.<br>";
            return;
        }

        if ($preco < 0) {
            echo "Erro: preço não pode ser negativo.<br>";
            return;
        }

        $this->preco = floatval($preco);
    }

    public function getPreco() {
        return $this->preco;
    }
}