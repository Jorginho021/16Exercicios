<?php

include('aluno.php');

$aluno = new Aluno();
$aluno->setNome('Ana');
$aluno->setNota(8.5);

echo 'Nome: ' . $aluno->getNome() . '<br>';
echo 'Nota: ' . number_format($aluno->getNota(), 1, ',', '.') . '<br>';
echo 'Status: ' . $aluno->situacao();
