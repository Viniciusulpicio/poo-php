<?php

use App\DadosMoveis;

$plano1 = new DadosMoveis("jose", 20);
$plano2 = new DadosMoveis("tomas", 10);

$plano1->usar(0.3);
echo $plano1->status();
$plano1->usar(7);
echo $plano1->status();
$plano1->usar(1);
echo $plano1->status();
$plano1->usar(20);
echo $plano1->status();
$plano1->recarregar(90);
echo $plano1->status();
$plano1->usar(100);

$plano2->usar(20);
echo $plano2->status();
$plano2->recarregar(1);
echo $plano2->status();



?>