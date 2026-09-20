<?php

namespace App;
use InvalidArgumentException;

class Semaforo{
    public function __construct(
        public string $local,
        private string $color,
        private int $ciclosCompletos,
    )
    {
        if ($color === "vermelho"){
            throw new InvalidArgumentException("O valor não pode começar em verlho");
        }
    }

    public function avancar(): void{
        if ($this->color === "vermelho"){
            $this->color = "verde";
        } elseif($this->color === "verde"){
            $this->color = "amarelo";
        } elseif($this->color === "amarelo"){
            $this->color = "vermelho";
            $this->ciclosCompletos += 1;
        }
    }

    public function podePassar(): bool{
        if ($this->color === "verde"){
            return True;
        } else{
            return False;
        }
    }

    public function estado(): string {
        return "O semafaro esta em " . $this->local . " na cor ". $this->color . " e ja fez " . $this->ciclosCompletos . " ciclos";
    }
}


?>