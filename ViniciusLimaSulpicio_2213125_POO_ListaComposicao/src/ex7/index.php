<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\ex3\Carrinho;
use App\ex7\Estacionamento;
use App\ex7\Veiculo;

$estacionamento = new Estacionamento("Estacionarios", 4);

$civic = new Veiculo("EBC-823", "Civic 1999", "Vinicius");
$corolla = new Veiculo( 'ABC-1234', 'Corolla 2010', 'Ana' );
$gol = new Veiculo( 'XYZ-9876', 'Gol 2015', 'Carlos' );
$onix = new Veiculo( 'DEF-4567', 'Onix 2020', 'Mariana' );
$ka = new Veiculo( 'GHI-5432', 'Ka 2018', 'Pedro' );

$estacionamento->adicionarVeiculo($civic);
$estacionamento->adicionarVeiculo($corolla);
$estacionamento->adicionarVeiculo($gol);
$estacionamento->adicionarVeiculo($onix);
$estacionamento->adicionarVeiculo($ka);
$estacionamento->adicionarVeiculo($ka);

echo $estacionamento->status();

$estacionamento->removerVeiculo($onix);
echo $estacionamento->status();

$estacionamento->localizarVeiculos("DEF-4567");
$estacionamento->localizarVeiculos("DEF-4568");
echo $estacionamento->status();

echo PHP_EOL . "Fim do exercicio 7" . PHP_EOL;

?>