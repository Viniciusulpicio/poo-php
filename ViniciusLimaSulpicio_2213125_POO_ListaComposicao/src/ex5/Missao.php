<?php

namespace App\ex5;
use InvalidArgumentException;

class Missao{
    public function __construct(
        private string $titulo,
        private string $descricao,
        private string $recompensa,
        private int $moedas,
        private bool $situacao = false,
    )
    {
    }

    public function getNome(): string{
        return $this->titulo;
    }

    public function getSituacao(): bool{
        return $this->situacao;
    }

    public function getMoedas(): int {
        return $this->moedas;
    }

    public function getMissao(): string{
        $feita = "";
        if ($this->situacao == true){
            $feita = "Missão completa";
        }else{
            $feita = "Missão incompleta";
        }
        return "Nome: {$this->titulo} | Descricao: {$this->descricao} | Recompensa: {$this->recompensa} | Moedas: {$this->moedas} | Feita: {$feita}";
    }

    public function completarMissao(){
        $this->situacao = true;
    }


}




?>