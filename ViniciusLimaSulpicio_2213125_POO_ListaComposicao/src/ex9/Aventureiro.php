<?php

namespace App\ex9;
use InvalidArgumentException;
use App\ex9\Equipamento;
use App\ex9\Mochila;

class Aventureiro{
    public function __construct(
        private string $nome,
        private int $vida,
        private Mochila $mochila,
    )
    {
        if($nome == "" || $vida < 0){
            throw new InvalidArgumentException("Argumentos Invalidos");
        }
    }

    public function colocarEquipamentos(Equipamento $equipamento): bool{
        return $this->mochila->adicionarEquipamento($equipamento);
    }

    public function descartarEquipamentos(Equipamento $equipamento): bool{
        return $this->mochila->removerEquipamento($equipamento);
    }

    public function status(): string{
        $retorno = "=== STATUS DO AVENTUREIRO ===" . PHP_EOL;
        $retorno .= "Nome: {$this->nome} | Vida: {$this->vida}" . PHP_EOL;
        $retorno .= "Capacidade da Mochila: {$this->mochila->getPesoAtual()} | {$this->mochila->getCapacidade()} kg" . PHP_EOL;
        $retorno .= "--- Equipamentos ---" . PHP_EOL;
        $retorno .= $this->mochila->getEquipamentos();
        
        return $retorno;

    }
}

?>