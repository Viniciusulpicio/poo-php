<?php

use App\Triangulo;

$triangulo1 = new Triangulo(5, 5, 5); 
echo $triangulo1->classificar() . PHP_EOL; 

$triangulo2 = new Triangulo(7, 7, 4); 
echo $triangulo2->classificar() . PHP_EOL; 

$triangulo3 = new Triangulo(3, 4, 5); 
echo $triangulo3->classificar() . PHP_EOL;

$triangulo3 = new Triangulo(3, 4, 7); 


