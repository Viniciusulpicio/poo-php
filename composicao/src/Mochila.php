<?php

namespace App;
use InvalidArgumentException;

class Mochila{
    public function __construct(
        private float $capacidade,
        private float $ocupado = 0,
    )
    {
        if($this->capacidade <= 0){
            throw new InvalidArgumentException("A capacidade deve ser maior que zero");
        }
    }

    public function adicionarPeso(float $peso): bool{
        if($peso <= 0){
            echo "O peso não pode ser negativo" . PHP_EOL;
            return False;
        }

        if($this->capacidade < $this->ocupado + $peso){
            echo "A capacidade é inferior ao peso adicionado" . PHP_EOL;
            return False;
        }else{
            $this->ocupado += $peso;
            return True;
        }
    }

    public function getCapacidade(): float{
        return $this->capacidade;
    }

    public function getOculpado(): float{
        return $this->ocupado;
    }

}


?>