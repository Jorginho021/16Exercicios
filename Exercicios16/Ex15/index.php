<?php

include 'usuario.php';

$usuario = new Usuario('ana@gmail.com', '123456');

$tentativa1 = ['email' => 'ana@gmail.com', 'senha' => '123456'];
$tentativa2 = ['email' => 'ana@gmail.com', 'senha' => '000000'];

if ($usuario->login($tentativa1['email'], $tentativa1['senha'])) {
    echo "Tentativa 1: Login bem-sucedido.<br>";
} else {
    echo "Tentativa 1: Falha no login.<br>";
}

if ($usuario->login($tentativa2['email'], $tentativa2['senha'])) {
    echo "Tentativa 2: Login bem-sucedido.<br>";
} else {
    echo "Tentativa 2: Falha no login.<br>";
}
