<?php

namespace App;

class Aluno{
    public function __construct(
        private string $nome,
        private int $RA,
        private array $notas = []
    ){
        if($this->nome === "" || $this->RA === ""){
            throw new InvalidArgumentException("Valor inválido");
        }
    }

    public function adicionarNota(float $nota): void{
        if($nota >= 0 && $nota <= 10){
            $this->notas[] = $nota; 
        } else{
            echo "Valor de nota inválido" . PHP_EOL;
        }
    }

    public function calcularMedia(): float {
        if (count($this->notas) === 0) {
            echo "A lista de notas esta vazia\n";
            return 0.0;
        }

        return array_sum($this->notas) / count($this->notas);
    }

    public function situacao(): string{
        if($this->calcularMedia() >= 7){
            return "Aprovado";
        } else if($this->calcularMedia() < 5){
            return "Reprovado";
        } else{
            return "Recuperação";
        }
    }

    public function resumo(): string{
        return "O aluno: " . $this->nome . " portador do RA: " . $this->RA . " ficou com média: " . $this->calcularMedia() . " e esta: " . $this->situacao() . PHP_EOL;
    }
}


?>