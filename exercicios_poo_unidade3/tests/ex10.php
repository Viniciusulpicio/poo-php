<?php
// Vinicius Lima Sulpicio - 2213125 - BCC-B

use App\CofrinhoMeta;

$cofrinho = new CofrinhoMeta("Carro", 2700, 25000);

$cofrinho->depositar(400);
echo $cofrinho->resumo();

$cofrinho->depositar(900);
echo $cofrinho->resumo();

$cofrinho->depositar(200);
echo $cofrinho->resumo();

$cofrinho->retirar(600);
echo $cofrinho->resumo();

$cofrinho->depositar(200);
echo $cofrinho->resumo();

$cofrinho->depositar(20000);
echo $cofrinho->resumo();


$cofrinho->depositar(20000);
echo $cofrinho->resumo();

?>