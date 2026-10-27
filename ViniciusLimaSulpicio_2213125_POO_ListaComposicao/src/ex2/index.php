<?php

use App\ex2\Time;
use App\ex2\Jogador;

require_once __DIR__ . '/../../vendor/autoload.php';

$selecao = new Time("MAC");

$goleiro = new Jogador("Wagner Coradin", 1, "Goleiro");
$lateral = new Jogador("Douglas Dias", 2, "Lateral");
$zagueiro = new Jogador("Matheus Abreu", 3, "Zagueiro");
$meio = new Jogador("Jose Alberto", 3, "meio");


$selecao->cadastrarJogador($goleiro);
$selecao->cadastrarJogador($lateral);
$selecao->cadastrarJogador($zagueiro);
$selecao->cadastrarJogador($meio);

echo $selecao->localizarJogador(2);

echo $selecao->status();

echo "Fim exericico 2" .PHP_EOL;


?>