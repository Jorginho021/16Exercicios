<?php

include('calculadora.php');

$calc = new Calculadora();
$resultado = $calc->somar(7, 5);

echo "Resultado da soma: " . $resultado;