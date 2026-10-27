<?php

namespace App\ex9;
use InvalidArgumentException;

class Equipamento{
    public function __construct(
        private string $nome,
        private float $peso,
        private int $moedas,
    )
    {
        if($nome == "" || $peso < 0 || $moedas < 0){
            throw new InvalidArgumentException("Argumentos invalidos");
        }
    }

    public function getNome(): string{
        return $this->nome;
    }

    public function getPeso(): float{
        return $this->peso;
    }


    public function getMoedas(): int{
        return $this->moedas;
    }
}

?>