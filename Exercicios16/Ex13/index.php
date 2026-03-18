<?php

include('aluno.php');

$aluno1 = new Aluno('Beatriz', 8.5, 7.0);
$aluno2 = new Aluno('Carlos', 6.0, 5.0);
$aluno3 = new Aluno('Daniel', 4.0, 3.5);

$lista = [$aluno1, $aluno2, $aluno3];

foreach ($lista as $aluno) {
    echo "Nome: {$aluno->nome} <br>";
    echo "Nota 1: {$aluno->nota1} - Nota 2: {$aluno->nota2} <br>";
    echo "Média: " . number_format($aluno->media(), 2, ',', '.') . "<br>";
    echo "Situação: " . $aluno->situacao() . "<br><br>";
}
