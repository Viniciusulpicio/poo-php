<?php

use App\Semaforo;

$semafaro1 = new Semaforo("XV de Novembro", "verde", 0);

$semafaro1->avancar();
if ($semafaro1->podePassar() === True){
    echo "Pode passar"  . PHP_EOL;
}else{
    echo "Não pode passar"  . PHP_EOL;
}

echo $semafaro1->estado() . PHP_EOL;

$semafaro1->avancar();
if ($semafaro1->podePassar() === True){
    echo "Pode passar"  . PHP_EOL;
}else{
    echo "Não pode passar"  . PHP_EOL;
}

echo $semafaro1->estado() . PHP_EOL;
$semafaro1->avancar();
if ($semafaro1->podePassar() === True){
    echo "Pode passar"  . PHP_EOL;
}else{
    echo "Não pode passar"  . PHP_EOL;
}

echo $semafaro1->estado() . PHP_EOL;
$semafaro1->avancar();
if ($semafaro1->podePassar() === True){
    echo "Pode passar"  . PHP_EOL;
}else{
    echo "Não pode passar"  . PHP_EOL;
}

echo $semafaro1->estado() . PHP_EOL;
$semafaro1->avancar();
if ($semafaro1->podePassar() === True){
    echo "Pode passar"  . PHP_EOL;
}else{
    echo "Não pode passar"  . PHP_EOL;
}

echo $semafaro1->estado() . PHP_EOL;
$semafaro1->avancar();
if ($semafaro1->podePassar() === True){
    echo "Pode passar"  . PHP_EOL;
}else{
    echo "Não pode passar"  . PHP_EOL;
}

echo $semafaro1->estado() . PHP_EOL;
$semafaro1->avancar();
if ($semafaro1->podePassar() === True){
    echo "Pode passar"  . PHP_EOL;
}else{
    echo "Não pode passar"  . PHP_EOL;
}

echo $semafaro1->estado() . PHP_EOL;

?>