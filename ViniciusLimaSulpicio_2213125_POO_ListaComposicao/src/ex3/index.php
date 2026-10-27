<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\ex3\Carrinho;
use App\ex3\Produto;

$carrinho = new Carrinho("Kelvin");

$controle_xbox = new Produto("Controle Xbox Ultimate", 180.90, 5243324);
$placa_video = new Produto("Placa de Video", 1480.92, 325235);
$headset = new Produto("Headset JBL", 300, 234244);
$tenis = new Produto("Tenis", 280, 4324324);


$carrinho->adicionarProduto($controle_xbox);
echo $carrinho->status();

$carrinho->adicionarProduto($placa_video);
echo $carrinho->status();

$carrinho->adicionarProduto($headset);
echo $carrinho->status();

$carrinho->adicionarProduto($tenis);
echo $carrinho->status();

$carrinho->adicionarProduto($tenis);
echo $carrinho->status();

echo PHP_EOL . "Fim do exercicio 3" . PHP_EOL;
?>