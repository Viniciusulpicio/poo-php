<?php

use App\MaquinaSnack;

$snak = new MaquinaSnack("snak", 10);

$snak->reabastecer(60);
$snak->inserirCredito(40);

$snak->comprar();
echo $snak->status();
$snak->comprar();
echo $snak->status();
$snak->comprar();
echo $snak->status();
$snak->comprar();
echo $snak->status();
$snak->comprar();
echo $snak->status();

echo $snak->devolverCredito();



?>