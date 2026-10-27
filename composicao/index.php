<?php

// PHP_EOL  --> End of Line --> Pula para a proxima linha
echo "Servidor iniciado..." . PHP_EOL ;

require_once __DIR__ . '/vendor/autoload.php';
use App\Jogador;
use App\Mochila;

$mochila1 = new Mochila(20);
$jogador1 = new Jogador("teste", $mochila1);

echo $jogador1->ler();
$mochila1->adicionarPeso(4);
echo $jogador1->ler();
$mochila1->adicionarPeso(6);
echo $jogador1->ler();
$mochila1->adicionarPeso(30);
echo $jogador1->ler();

?>