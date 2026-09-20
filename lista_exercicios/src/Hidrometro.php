<?php

namespace App;
use InvalidArgumentException;

class Hidrometro{
    public function __construct(
        public string $identificacao,
        private float $leituraAnterior,
        private float $leituraAtual,
    )
    {
        if($leituraAnterior < 0 || $leituraAtual < 0){
            throw new InvalidArgumentException("A leitura não pode ser menor que zero");
        }
    }

    public function registrarLeitura(float $novaLeitura): bool{
        if($novaLeitura >= $this->leituraAtual){
            $this->leituraAnterior = $this->leituraAtual;
            $this->leituraAtual = $novaLeitura;
            return True;
        }else{
            echo "A leitura deve ser maior que a atual" . PHP_EOL;
            return False;
        }
    }

    public function consumoUltimoPeriodo(): float{
        return $this->leituraAtual - $this->leituraAnterior;
    }

    public function estimarConta(float $precoPorM3): float{
        if ($precoPorM3 < 0) {
            throw new InvalidArgumentException("O preço por m2 não pode ser negativo");
        } else {
            return $this->consumoUltimoPeriodo() * $precoPorM3;
        }
    }

    public function resumo(float $precoPorM3): string{
        return "O hidrometro " . $this->identificacao . " teve o consumo de " . $this->consumoUltimoPeriodo() . " e custou " . $this->estimarConta($precoPorM3) . " sua ultima leitura é " . $this->leituraAtual . PHP_EOL;
    }
}



?>