<?php 
// Vinicius Lima Sulpicio - 2213125 - BCC-B

use App\Temperatura;

$temperatura1 = new Temperatura(32);
$temperatura2 = new Temperatura(-40);
$novoValor = -300;

if ($temperatura1->alterar($novoValor) === true) {
    echo "Valor válido" . PHP_EOL;
} else {
    echo "Valor inválido" . PHP_EOL;
}

echo "Sua temperatura em Fahrenheit é: " . $temperatura1->emFahrenheit() . PHP_EOL;
echo "Sua temperatura em Kelvin é: " . $temperatura1->emKelvin() . PHP_EOL;
echo $temperatura1->descricao() . PHP_EOL;

echo "Sua temperatura negativa em Fahrenheit é: " . $temperatura2->emFahrenheit() . PHP_EOL;
echo "Sua temperatura negativa em Kelvin é: " . $temperatura2->emKelvin() . PHP_EOL;
echo $temperatura2->descricao() . PHP_EOL;

?>