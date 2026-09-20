<?php

namespace App;

use InvalidArgumentException;

class IngressoCinema{
    public function __construct(
        public string $filme,
        private float $precoBase,
        private bool $meiaEntrada,
    )
    {
        if ($this->precoBase <= 0){
            throw new InvalidArgumentException("O preço não pode ser menor que zero");
        }
    }

    public function calcularValorFinal(): float{
        if ($this->meiaEntrada === true){
            return $this->precoBase * 0.5;

        } else{
            return $this->precoBase;
        }
    }

    public function definirMeiaEntrada(bool $possuiDireito): void{
        $this->meiaEntrada = $possuiDireito;
    }

    public function resumo(): string {
        if ($this->meiaEntrada == true){
            $tipo = "Meia";
        }else{
            $tipo = "Inteira";
        }
        return "Filme: {$this->filme}, Seu ingresso é: {$tipo} e o valor {$this->calcularValorFinal()}";
    }
}


?>