<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\ex10\Atividade;
use App\ex10\Disciplina;
use App\ex10\Estudante;

$provaMatematica = new Atividade("Prova Bimestral", 10.0);
$listaMatematica = new Atividade("Lista de Exercícios", 5.0);
$projetoFisica   = new Atividade("Projeto Prático", 20.0);

$disciplinaMatematica = new Disciplina("Matemática Aplicada");
$disciplinaMatematica->adicionarAtividade($provaMatematica);
$disciplinaMatematica->adicionarAtividade($listaMatematica);

$disciplinaFisica = new Disciplina("Física Clássica");
$disciplinaFisica->adicionarAtividade($projetoFisica);

$aluno = new Estudante("Tomas", 2026101);

$aluno->adicionarDisciplina($disciplinaMatematica);
$aluno->adicionarDisciplina($disciplinaFisica);

$aluno->aplicarNota($provaMatematica, 8.0);
$aluno->aplicarNota($listaMatematica, 5.0);

$aluno->aplicarNota($projetoFisica, 15.0);

echo $aluno->status();


echo PHP_EOL . "Fim do exercicio 10" . PHP_EOL;
