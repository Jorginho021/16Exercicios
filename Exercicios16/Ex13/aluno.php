<?php

class Aluno {
    public $nome;
    public $nota1;
    public $nota2;

    public function __construct($nome, $nota1, $nota2) {
        $this->nome = $nome;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
    }

    public function media() {
        return ($this->nota1 + $this->nota2) / 2;
    }

    public function situacao() {
        $media = $this->media();
        if ($media >= 7) {
            return 'Aprovado';
        }

        if ($media >= 5) {
            return 'Recuperação';
        }

        return 'Reprovado';
    }
}