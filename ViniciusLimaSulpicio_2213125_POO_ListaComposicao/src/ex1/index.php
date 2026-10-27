<?php

use App\ex1\Questionario;

require_once __DIR__ . '/../../vendor/autoload.php';

$questionario = new Questionario("Geografia");

$questionario->adicionarPergunta("Cite 3 efeito do efeito estufa");
$questionario->adicionarPergunta("Cit efeitos do El Nino");
$questionario->adicionarPergunta("Cite 4 planetas do sistema solar");

echo $questionario->status();


echo PHP_EOL . "Fim exercicio 1" . PHP_EOL;

?>