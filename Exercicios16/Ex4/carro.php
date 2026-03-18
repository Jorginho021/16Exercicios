<?php

class Carro {
    public $marca;
    public $velocidade;

    public function acelerar() {
        $this->velocidade += 10;
    }

    public function mostrarVelocidade() {
        echo "Velocidade atual: {$this->velocidade} km/h<br>";
    }
}