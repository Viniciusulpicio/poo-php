<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\ex8\Sessao;
use App\ex8\Ingresso;

$sessao = new Sessao("Senhor dos Anéis", 4);

$ingresso1 = new Ingresso("Vinicius", 1, 30.00);
$ingresso2 = new Ingresso("Ana", 2, 30.00);
$ingresso3 = new Ingresso("Carlos", 3, 15.00);
$ingresso4 = new Ingresso("Mariana", 4, 30.00);

$ingressoInvalido = new Ingresso("Pedro", 5, 30.00); 
$ingressoRepetido = new Ingresso("João", 2, 30.00); 

$sessao->venderIngresso($ingresso1);
$sessao->venderIngresso($ingresso2);
$sessao->venderIngresso($ingresso3);

echo PHP_EOL;
echo $sessao->status();
echo PHP_EOL;

$sessao->venderIngresso($ingresso4);
$sessao->venderIngresso($ingressoInvalido);
$sessao->venderIngresso($ingressoRepetido);

echo PHP_EOL;
echo $sessao->status();

echo PHP_EOL . "Fim do exercicio 8" . PHP_EOL;

?>