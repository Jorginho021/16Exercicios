<?php

class pessoa{
    public $nome;

    public function apresentar(){
        echo "Olá, meu nome é " . $this->nome;
    }
}