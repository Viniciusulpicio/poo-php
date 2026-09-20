<?php

namespace App;
use InvalidArgumentException;

class DadosMoveis{
    public function __construct(
        public string $nome,
        private float $franquia,
        private float $consumo = 0,
    )
    {
        if($consumo < 0 || $franquia < 0){
            throw new InvalidArgumentException("Os dados não podem ser negativos");
        }
    }

    public function recarregar(float $GB): bool{
        if($GB > 0){
            $this->franquia += $GB;
            return True;
        }else{
            echo "Digite um valor válido"  . PHP_EOL;
            return False;
        }
    }

    public function usar(float $uso): bool {
        if ($uso <= 0) {
            echo "Erro: O valor de consumo deve ser maior que zero." . PHP_EOL;
            return false;
        }

        if ($this->franquia >= $uso) {
            $this->franquia -= $uso;
            $this->consumo += $uso;
            return true;
        } else {
            echo "Saldo insuficiente para o consumo" . PHP_EOL;
            return false;
        }
    }

    public function saldo(): float{
        return $this->franquia;
    }

    public function status(): string{
        return "O plado de ". $this->nome . " esta com saldo de " . $this->franquia . " e ja teve " . $this->consumo . " consumo mensal" . PHP_EOL;
    }
}


?>