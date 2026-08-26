<?php

// PHP_EOL  --> End of Line --> Pula para a proxima linha
echo "Servidor iniciado..." . PHP_EOL ;

require_once __DIR__ . '/vendor/autoload.php';

use App\Pessoa;
use App\Aluno;
use App\Produto;

// criar um novo objeto pessoa, isso é uma instacia de pessoa --> objeto é uma instancia

$pessoa = new Pessoa("Vinicius", 18);
echo $pessoa->saudacao() . PHP_EOL;

$pessoa2 = new Pessoa("Joao", 13);
echo $pessoa2->saudacao() . PHP_EOL;

$produto1 = new Produto("Sabão em pó", "Sabão", "OMO", 32);
echo $produto1->detalhes() . PHP_EOL;

$produto2 = new Produto("Short jeans", "Short","subverse", 130);
echo $produto2->detalhes() . PHP_EOL;

$aluno1 = new Aluno("Vinicius", 2213125, "viniciusulpicio.unimar@gmail.com", "Ciencia da computação");
echo $aluno1->apresentar() . PHP_EOL;

$aluno2 = new Aluno("Victao", 2220279, "victorhugooliveira933@gmail.com", "Ciencia da computação");
echo $aluno2->apresentar() . PHP_EOL;


?>