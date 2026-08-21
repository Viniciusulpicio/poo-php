<?php

// PHP_EOL  --> End of Line --> Pula para a proxima linha
// echo "Olá, PHP" . PHP_EOL 

require_once __DIR__ . '/vendor/autoload.php';

use App\Pessoa;

// criar um novo objeto pessoa, isso é uma instacia de pessoa --> objeto é uma instancia

$pessoa = new Pessoa("Vinicius", 18);
echo $pessoa->apresentar();

$pessoa2 = new Pessoa("Joao", 13);
echo $pessoa2->apresentar();


?>