<?php

use App\DroneInspecao;

$drone = new DroneInspecao("DJI", 15);
echo $drone->status() . PHP_EOL;

$drone->decolar();

$drone->recarregar(10);
echo $drone->status() . PHP_EOL;

$drone->decolar();
$drone->voar(2); 
echo $drone->status() . PHP_EOL;

$drone->pousar();
$drone->recarregar(90); 
echo $drone->status() . PHP_EOL;

$drone->decolar();
$drone->voar(30); 
$drone->status() . PHP_EOL;