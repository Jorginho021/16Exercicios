<?php

class Aluno {
    private $nome;
    private $nota;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNota($nota) {
        if (!is_numeric($nota)) {
            throw new InvalidArgumentException('Nota deve ser numérica.');
        }

        $nota = floatval($nota);

        if ($nota < 0 || $nota > 10) {
            throw new InvalidArgumentException('Nota deve estar entre 0 e 10.');
        }

        $this->nota = $nota;
    }

    public function getNota() {
        return $this->nota;
    }

    public function situacao() {
        return $this->nota >= 7 ? 'aprovado' : 'reprovado';
    }
}