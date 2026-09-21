<?php
// Vinicius Lima Sulpicio - 2213125 - BCC-B

use App\RoboArena;

$alpha = new RoboArena("alpha", 100, 100, 0);
$omega = new RoboArena("omega", 25, 10, 50);

echo $alpha->status();
echo $omega->status();

$alpha->combate();
echo $alpha->status();


$omega->combate();
echo $omega->status();

$omega->treinar();
echo $omega->status();

$omega->recarga();
$omega->reparo();
echo $omega->status();

$omega->treinar();
echo $omega->status();
