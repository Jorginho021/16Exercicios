<?php

include('lampada.php');

$lampada = new Lampada();
$lampada->mostrarStatus();

$lampada->ligar();
$lampada->mostrarStatus();

$lampada->desligar();
$lampada->mostrarStatus();