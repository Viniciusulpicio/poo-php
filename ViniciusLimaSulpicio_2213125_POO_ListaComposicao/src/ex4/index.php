<?php

require_once __DIR__ . '/../../vendor/autoload.php';
use App\ex4\Biblioteca;
use App\ex4\Livros;

$biblioteca = new Biblioteca("Senai");

$livro1 = new Livros("O Código Da Vinci", "Dan Brown", 655565811);
$livro2 = new Livros("O Símbolo Perdido", "Dan Brown", 655565812);
$livro3 = new Livros("Inferno", "Dan Brown", 655565813);
$livro4 = new Livros("Origem", "Dan Brown", 655565814);

$biblioteca->adicionarLivro($livro1);
$biblioteca->adicionarLivro($livro2);
$biblioteca->adicionarLivro($livro3);
$biblioteca->adicionarLivro($livro4);

echo $biblioteca->catalogo();

$biblioteca->emprestarLivro($livro3);
$biblioteca->emprestarLivro($livro4);
$biblioteca->adicionarLivro($livro3);

echo $biblioteca->catalogo();

$biblioteca->devolverLivro($livro4);
echo $biblioteca->catalogo();

echo PHP_EOL . "Fim do exercicio 4" . PHP_EOL;

?>