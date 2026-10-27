<?php

namespace App\ex3;
use InvalidArgumentException;


class Produto{
    public function __construct(
        private string $nome, 
        private float $preco,
        private int $cod,
    )
    {
        if($nome == "" || $preco <= 0 || $cod <0){
            throw new InvalidArgumentException("Dados inválidos");
        }
    }

    public function getNome(): string{
        return $this->nome;
    }

    public function getPreco(): float{
        return $this->preco;
    }


}


?>