<?php
//  Vinicius Lima Sulpicio - 2213125 - BCC-B -  Programação Orientada a Objetos-->

// PHP_EOL  --> End of Line --> Pula para a proxima linha
echo "start..." . PHP_EOL ;

require_once __DIR__ . '/vendor/autoload.php';

use App\Retangulo;

// exercicio 1 - retangulo
$retangulo = new Retangulo(10, 5);
echo $retangulo->area() . PHP_EOL;
echo $retangulo->perimetro() . PHP_EOL;

if ($retangulo->ehQuadrado()){
    echo "Eh quadrado" . PHP_EOL;
} else{
    echo "Nao é quadrado" . PHP_EOL;

}

$retangulo->redimencionar(-5, 10);

?>