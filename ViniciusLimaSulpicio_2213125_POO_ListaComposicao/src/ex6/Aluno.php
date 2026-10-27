<?php

namespace App\ex6;
use InvalidArgumentException;

class Aluno{
    public function __construct(
        private string $nome,
        private int $ra,
        private float $nota,
    )
    {
        if($this->nome == "" || $this->ra < 0){
            throw new InvalidArgumentException("Argumentos invalidos");
        }

        // if($this->nota > 10 || $this-> nota < 10){
        //     throw new InvalidArgumentException("Valor de nota inválida");
        // }
    }

    public function getNome(): string{
        return $this->nome;
    }

    public function getRa(): int{
        return $this->ra;
    }

    public function getNota(): float{
        return $this->nota;
    }

    public function getAluno(): string{
        $status = "";
        $status .= "{$this->nome} | RA: {$this->ra} | Nota: {$this->nota}";
        return $status;
    }

}



?>