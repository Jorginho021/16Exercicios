<?php

class Usuario {
    public $email;
    private $senha;

    public function __construct($email, $senha) {
        $this->email = $email;
        $this->senha = $senha;
    }

    public function login($email, $senha) {
        if ($this->email === $email && $this->senha === $senha) {
            return true;
        }
        return false;
    }
}