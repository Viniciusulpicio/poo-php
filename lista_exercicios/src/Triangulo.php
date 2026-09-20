<?php

namespace App;
use InvalidArgumentException;

class Triangulo{
    public function __construct(
        private float $ladoA,
        private float $ladoB,
        private float $ladoC,
    )
    {
        if($ladoA <= 0 || $ladoB <= 0 || $ladoC <= 0){
            throw new InvalidArgumentException("Os valores devem ser maior que zero");
        }

        if($ladoA >= $ladoB + $ladoC || $ladoB >= $ladoA + $ladoC || $ladoC >= $ladoA + $ladoB){
            echo ("Um lado deve ser menor que a soma dos outros dois para existir um triângulo.");
        }
    }


    public function ehValido(): bool{
        if($this->ladoA + $this->ladoB > $this->ladoC || $this->ladoA + $this->ladoC > $this->ladoB || $this->ladoB + $this->ladoC > $this->ladoA){
            return false;
        }else{
            return true;
        }
    }

    public function classificar(): string{
        if($this->ladoA === $this->ladoB && $this->ladoB === $this->ladoC){
            return "Equilátero";
        } elseif($this->ladoA !== $this->ladoB && $this->ladoB !== $this->ladoC && $this->ladoA !== $this->ladoC) {
            return "Escaleno";
        } elseif ($this->ladoA === $this->ladoB || $this->ladoA === $this->ladoC || $this->ladoB === $this->ladoC){
            return "Isosceles";
        }else{
            return "Invalido";
        }
    }

    public function perimetro(): float{
        if($this->classificar()!=="Invalido"){
            return $this->ladoA + $this->ladoB + $this->ladoC;
        }else{
            return 0.0;
        }
    }
}

?>