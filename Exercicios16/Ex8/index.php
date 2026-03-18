<?php

include('aluno.php');

$aluno = new Aluno();
$aluno->nota = 8.2;

echo 'Nota: ' . $aluno->nota . '<br>';
echo 'Resultado: ' . $aluno->verificarAprovacao();
