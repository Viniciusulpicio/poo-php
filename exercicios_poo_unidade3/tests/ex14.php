<?php
// Vinicius Lima Sulpicio - 2213125 - BCC-B

use App\BateriaDispositivo;

$celular = new BateriaDispositivo("Samsung", 50);
echo $celular->status() . PHP_EOL;

$celular->usar(12);
echo $celular->nivel() . PHP_EOL;


$celular->usar(400);
echo $celular->nivel() . PHP_EOL;

echo $celular->estaCritica() . PHP_EOL;

$celular->carregar(150);
echo $celular->status() . PHP_EOL;

?>