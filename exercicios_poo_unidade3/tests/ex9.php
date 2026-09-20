<?php

use App\PersonagemRPG;

$personagem = new PersonagemRPG("José", "Arqueiro", 100, 100);

$personagem->usarHabilidade(45);
echo$personagem->status() . PHP_EOL;

$personagem->receberDano(99);
echo$personagem->status() . PHP_EOL;

$personagem->descansar(110);
echo$personagem->status() . PHP_EOL;

$personagem->curar(500);
echo$personagem->status() . PHP_EOL;

$personagem->receberDano(101);
echo$personagem->status() . PHP_EOL;

$personagem->usarHabilidade(45);
echo$personagem->status() . PHP_EOL;

?>