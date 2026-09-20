<?php

use App\SmartLocker;

$armario1 = new SmartLocker("A1");

$armario1->receberPacote("AMZ-9982");

$armario1->retiradaPacote(1111);
$armario1->retiradaPacote(2222);
$armario1->retiradaPacote(3333);

$armario1->retiradaPacote(4444);

$armario1->redefinir(200926);


$armario2 = new SmartLocker("B2");

$armario2->receberPacote("ML-4509");
