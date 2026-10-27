<?php

require_once __DIR__ . '/../../vendor/autoload.php';
use App\ex6\Turma;
use App\ex6\Aluno;

$turma = new Turma("BCC");

$vinicius = new Aluno("Vinicius", 821738, 8);
$victor = new Aluno("Victor", 312123213, 3);
$danilo = new Aluno("Danilo", 2131231, 7.5);
$enzo = new Aluno("Enzo", 2133131, 10);

$turma->adicionarAluno($vinicius);
$turma->adicionarAluno($victor);
$turma->adicionarAluno($danilo);
$turma->adicionarAluno($enzo);

echo $turma->status();

echo PHP_EOL . "Fim do exercicio 6" . PHP_EOL;

?>