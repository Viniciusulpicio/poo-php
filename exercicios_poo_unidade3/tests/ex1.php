<?php 
// Vinicius Lima Sulpicio - 2213125 - BCC-B

use App\Retangulo;

$retangulo1 = new Retangulo(10,10);
$retangulo2 = new Retangulo (7, 3);
$retangulo3 = new Retangulo (-7, 3);

echo "A área do retangulo 1 é: {$retangulo1->Area()}" . PHP_EOL;
echo "O perimetro do retangulo 2 é: {$retangulo2->perimetro()}" . PHP_EOL;

if ($retangulo1->ehQuadrado() == 1){
    echo "O retangulo 1 é quadrado" . PHP_EOL;
}else{
    echo "O retangulo 1 não é quadrado";
}
?>