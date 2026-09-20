<?php

namespace App;
use InvalidArgumentException;

class LampadaInteligente{
    private bool $ligada = false;
    private int $intensidade = 50;
    public function __construct(
        public string $comodo,
    )
    {}

    public function ligar(): void{
        $this->ligada = True;
    }

    public function desligar(): void{
        $this->ligada = False;
    }

    public function ajustarIntensidade(int $valor): bool{
        if($valor > 100 || $valor < 0){
            echo "A intensidade fica entre 0 e 100" . PHP_EOL;
            return False;
        }else{
            $this->intensidade = $valor;
            return True;
        }
    }

    public function estado(): string{
        if($this->ligada === True){
            return "ligada";
        }else{
            return "desligada";
        }
    }

    public function status(): string{
        return "A lâmpada do comodo " . $this->comodo . " esta " . $this->estado() . " e com intensidade em " . $this->intensidade;
    }
}


?>