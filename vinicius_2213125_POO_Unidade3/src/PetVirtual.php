<?php

namespace App;

use InvalidArgumentException;

class PetVirtual{
    public function __construct(
        private string $nome,
        private int $fome = 0,
        private int $energia = 100,
        private int $felicidade = 100
    ){
        if ($this->nome === ""){
            throw new InvalidArgumentException("Valor inválido");
        }
    }

    private function limitar(int $valor): int{
        if ($valor < 0){
            return 0;
        } else if ($valor > 100){
            return 100;
        } else{
            return $valor;
        }
    }

    public function alimentar(): void{
        $this->fome = $this->limitar($this->fome - 30);
        $this->energia = $this->limitar($this->energia + 10);
        $this->felicidade = $this->limitar($this->felicidade + 5);
    }

    public function brincar(): void{
        $this->felicidade = $this->limitar($this->felicidade + 25);
        $this->energia = $this->limitar($this->energia - 20);
        $this->fome = $this->limitar($this->fome + 20);
    }

    public function dormir(): void{
        $this->energia = $this->limitar($this->energia + 40);
        $this->fome = $this->limitar($this->fome + 15);
        $this->felicidade = $this->limitar($this->felicidade + 5);
    }

    public function status(): string{
        return "O pet: " . $this->nome . " tem fome: " . $this->fome . ", energia: " . $this->energia . " e felicidade: " . $this->felicidade . PHP_EOL;
    }
}

?>