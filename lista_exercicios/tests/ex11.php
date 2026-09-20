<?php

use App\CartaoTransporte;

$cartao = new CartaoTransporte("Tomas", 0, 5.65);

$cartao->recarregar(45);
echo $cartao->resumo();

$cartao->embarcar();
$cartao->embarcar();
$cartao->embarcar();
$cartao->embarcar();
$cartao->embarcar();
echo $cartao->resumo();


$cartao->recarregar(90);
echo $cartao->resumo();

$cartao->embarcar();
$cartao->embarcar();
$cartao->embarcar();
$cartao->embarcar();
$cartao->embarcar();
$cartao->embarcar();
$cartao->embarcar();
$cartao->embarcar();
$cartao->embarcar();
$cartao->embarcar();
$cartao->embarcar();
$cartao->embarcar();
$cartao->embarcar();

echo $cartao->resumo();

?>
