<?php

namespace App;
use InvalidArgumentException;
use App\Mochila;

class ItemPedido{
    public function __construct(
        private string $produto,
        private float $preco,
        private int $quantidade = 0,

    )
    {
    }


    public function calcularSubTotal(): float{
        return $this->quantidade * $this->preco;
    }

    public function getProtudo(): string{
        return $this->produto;
    }

    

    
}



?>