<?php

namespace App;
use InvalidArgumentException;

class MaquinaSnack{
    public function __construct(
        public string $produto,
        private float $preco,
        private int $estoque = 0,
        private float $credito = 0,
    )
    {
        if ($preco < 0){
            throw new InvalidArgumentException("Valor não pode ser negativo");
        }
    }

    public function reabastecer(int $quantidade): bool{
        if($quantidade > 0){
            $this->estoque = $this->estoque + $quantidade;
            return True;
        }else{
            echo "A quantidade não pode ser negativa";
            return False;
        }
    }

    public function inserirCredito(float $valor): bool{
        if($valor > 0){
            $this->credito = $this->credito + $valor;
            return True;
        }else{
            echo "A quantidade não pode ser negativa" . PHP_EOL;
            return False;
        }
    }

    public function comprar(): bool{
        if($this->credito >= $this->preco && $this->estoque >= 1){
            $this->credito = $this->credito - $this->preco;
            $this->estoque = $this->estoque - 1;
            return True;
        }else{
            echo "O credito e o estoque não podem ser negativos" . PHP_EOL;
            return False;
        }
    }

    public function devolverCredito(): float{
        return $this->credito;
        $this->credito = 0;
    }

    public function status(): string{
        return "O produto " . $this->produto . " custa " . $this->preco . " e tem " . $this->estoque . " no estoque, alem de ter " . $this->credito . " creditos" . PHP_EOL;
    }
}


?>