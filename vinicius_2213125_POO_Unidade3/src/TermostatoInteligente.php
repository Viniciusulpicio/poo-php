<?php

namespace App;

class TermostatoInteligente{
    public function __construct(
        private float $temperaturaAtual,
        private float $temperaturaAlvo,
        private bool $ligado = false
    ) {
        if ($this->temperaturaAlvo < 16 && $this->temperaturaAlvo > 30){
            throw new InvalidArgumentException("Valor inválido");
        }
    }

    public function ligar(): void{
        $this->ligado = true;
    }

    public function desligar(): void{
        $this->ligado = false;
    }

    public function definirTemperaturaAlvo(float $temperatura): void{
        if ($temperatura < 16 || $temperatura > 30){
                echo "Valor inválido" . PHP_EOL;
            } else{
                $this->temperaturaAlvo = $temperatura;

            }
    }

    public function atualizarTemperaturaAtual(float $temperatura): void{
        $this->temperaturaAtual = $temperatura;
    }

    public function acaoNecessaria(): string{
        if ($this->ligado === false){
            return "Desligado" . PHP_EOL;
        } else if ($this->temperaturaAtual < $this->temperaturaAlvo){
            return "Aquecer" . PHP_EOL;
        } else if ($this->temperaturaAtual > $this->temperaturaAlvo){
            return "Esfriar" . PHP_EOL;
        } else{
            return "Manter" . PHP_EOL;
        }
    }
    
}

?>
