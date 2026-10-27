<?php

namespace App\ex2;
use InvalidArgumentException;

class Jogador{
    public function __construct(
        private string $nome,
        private int $numero,
        private string $posicao,
    )
    {
        
    }

    public function getJogador(): string{
        return "O {$this->nome} joga com a camisa {$this->numero} na posicao {$this->posicao}";
    }

    public function getNumero(): int{
        return $this->numero;
    }

    public function getNome(): string{
        return $this->nome;
    }

    public function getPosicao(): string{
        return $this->posicao;
    }
}


?>