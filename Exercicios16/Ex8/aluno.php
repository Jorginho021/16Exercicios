<?php

class Aluno {
    public $nota;

    public function verificarAprovacao() {
        if ($this->nota >= 7) {
            return 'Aprovado';
        }

        return 'Reprovado';
    }
}