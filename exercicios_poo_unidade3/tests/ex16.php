<?php
// Vinicius Lima Sulpicio - 2213125 - BCC-B

use App\PacoteEntrega;

$entrega = new PacoteEntrega("072", "marilia");
$entrega2 = new PacoteEntrega("073", "marilia");


$entrega->sairParaEntrega();
echo $entrega->statusAtual();

$entrega->sairParaEntrega();
echo $entrega->statusAtual();

$entrega->confirmarEntrega();
echo $entrega->statusAtual();

$entrega2->sairParaEntrega();
$entrega2->registrarFalha();
echo $entrega2->statusAtual();
$entrega2->sairParaEntrega();
$entrega2->registrarFalha();
echo $entrega2->statusAtual();
$entrega2->sairParaEntrega();
$entrega2->registrarFalha();
echo $entrega2->statusAtual();
$entrega2->sairParaEntrega();
$entrega2->registrarFalha();
echo $entrega2->statusAtual();



?>