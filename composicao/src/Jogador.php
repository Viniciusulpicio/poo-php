<?php

namespace App;
use InvalidArgumentException;
use App\Mochila;

class Jogador{
    public function __construct(
        private string $nome,
        private Mochila $mochila,
        private int $vida = 100,

    )
    {
        if($nome == ""){
            throw new InvalidArgumentException("O nome não pode ser vazio");
        }

        if($vida < 0 && $vida > 100){
            throw new InvalidArgumentException("A vida deve estar entre 0 e 100");
        }

    }

    public function ler(): string{
        return "O jogador: {$this->nome} | Vida: {$this->vida}/100 | Mochila: {$this->mochila->getOculpado()}/{$this->mochila->getCapacidade()}" . PHP_EOL;
    }
}



?>