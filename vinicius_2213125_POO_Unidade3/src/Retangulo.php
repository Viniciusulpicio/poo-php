<?php

namespace App;

use InvalidArgumentException;

class Retangulo {
    public function __construct(
        private float $largura,
        private float $altura
    ) {
        if ($this->largura <= 0 || $this->altura <= 0){
            throw new InvalidArgumentException('O valor não pode ser menor ou igual a 0');
        }
        
    }

    public function area(): float{
        $area = $this->largura * $this->altura; 
        return $area;
    }

    public function perimetro(): float{
        $perimetro = $this->largura + $this->largura + $this->altura + $this->altura; 
        return $perimetro;
    }

    public function ehQuadrado(): bool{
        if($this->largura == $this->altura){
            return true;
        }

        return false;
    }

    public function redimensionar(float $largura, float $altura): void{
        if ($largura <= 0 || $altura <= 0){
            throw new InvalidArgumentException('O valor não pode ser menor ou igual a 0');
        }

        $this->largura = $largura;
        $this->altura = $altura;

    }

}


?>