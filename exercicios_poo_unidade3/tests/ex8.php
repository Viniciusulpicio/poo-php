<?php
// Vinicius Lima Sulpicio - 2213125 - BCC-B

require_once './src/LampadaInteligente.php';

use App\LampadaInteligente;

$lampadaSala = new LampadaInteligente("Sala de Estar");
$lampadaQuarto = new LampadaInteligente("Quarto");

echo $lampadaSala->status() . PHP_EOL;

$lampadaSala->ligar();
$lampadaQuarto->desligar(); 

$lampadaSala->ajustarIntensidade(80);
$lampadaQuarto->ajustarIntensidade(10);

$lampadaSala->ajustarIntensidade(150);

$lampadaQuarto->ajustarIntensidade(-20);

echo $lampadaSala->status() . PHP_EOL;
echo $lampadaQuarto->status() . PHP_EOL;

?>