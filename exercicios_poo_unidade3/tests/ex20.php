<?php
// Vinicius Lima Sulpicio - 2213125 - BCC-B

use App\SobrevivenciaMarte;

$astronauta = new SobrevivenciaMarte("mateus", 4);
echo $astronauta->status();

$astronauta->explorar();
echo $astronauta->status();

$astronauta->explorar();
echo $astronauta->status();

$astronauta->explorar();
echo $astronauta->status();

$astronauta->explorar();
echo $astronauta->status();

$astronauta->explorar();
echo $astronauta->status();

$astronauta->descansar();
echo $astronauta->status();

$astronauta->usarCilincro();
echo $astronauta->status();


?>