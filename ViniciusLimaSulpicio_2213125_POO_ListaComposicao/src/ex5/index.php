<?php

require_once __DIR__ . '/../../vendor/autoload.php';
use App\ex5\Jogador;
use App\ex5\Missao;

$jogador = new Jogador("Aragorn");

// Criando e adicionando missões
$m1 = new Missao("Derrotar os Orcs", "Limpar a floresta", "Espada de Ferro", 50);
$m2 = new Missao("Resgatar o Aldeão", "Encontrar o ferreiro", "Poção de Vida", 30);

$jogador->adicionarMissao($m1);
$jogador->adicionarMissao($m2);

$jogador->fazerMissao("Derrotar os Orcs");

echo $jogador->exibirMissoesPendentes() . PHP_EOL;
echo $jogador->resumo() . PHP_EOL;

echo PHP_EOL . "Fim do exercicio 5" . PHP_EOL;


?>