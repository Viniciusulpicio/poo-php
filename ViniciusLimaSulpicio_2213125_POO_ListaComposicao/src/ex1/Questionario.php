<?php

namespace App\ex1;
use InvalidArgumentException;


class Questionario{
    public function __construct(
        private string $titulo,
        private int $total = 0,
        private array $perguntas = []
    )
    {
        if($titulo == ""){
            throw new InvalidArgumentException("O titulo não pode ser vazio");
        }
    }

    public function adicionarPergunta(string $pergunta): bool{
        if($pergunta != ""){
            $this->perguntas[] = $pergunta;
            $this->total += 1;
            return true;
        }else{
            echo "A pergunta não pode ser vazia";
            return false;
        }
    }

    public function getPerguntas(): string{
        if ($this->total > 0) {
            $retorno = "";
            foreach ($this->perguntas as $pergunta) {
                $retorno .= "- {$pergunta}" . PHP_EOL;
            }
            return $retorno;
        } else {
            return "Não tem perguntas";
        }

    }

    public function getTtotal(): int{
        return $this->total;
    }

    public function status(): string{
        $status = "";
        $status .= "Questionario: {$this->titulo}" . PHP_EOL . $this->getPerguntas() . PHP_EOL . "O total de perguntas é: " . $this->getTtotal();
        return $status;
    }
}



?>