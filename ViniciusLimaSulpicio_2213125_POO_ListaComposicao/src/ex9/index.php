<?php

require_once __DIR__ . '/../../vendor/autoload.php';
use App\ex9\Equipamento;
use App\ex9\Mochila;
use App\ex9\Aventureiro;


$mochilaDoHeroi = new Mochila(10.0);

$heroi = new Aventureiro("Arthur", 100, $mochilaDoHeroi);

$espada = new Equipamento("Espada de Ferro", 4.5, 150);
$escudo = new Equipamento("Escudo de Madeira", 3.0, 50);
$armaduraPesada = new Equipamento("Armadura de Aço", 15.0, 500); // Muito pesada!

$heroi->colocarEquipamentos($espada);
$heroi->colocarEquipamentos($escudo);

$heroi->colocarEquipamentos($armaduraPesada); 

echo PHP_EOL . $heroi->status();


echo PHP_EOL . "Fim do exercicio 9" . PHP_EOL;

?>
