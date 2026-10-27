<?php

namespace App\ex9;

use InvalidArgumentException;
use App\ex9\Equipamento;

class Mochila {
    public function __construct(
        private float $capacidade_maxima,
        private array $equipamentos = [], 
    ) {
        if ($capacidade_maxima <= 0) { 
            throw new InvalidArgumentException("A capacidade máxima deve ser maior que zero.");
        }
    }

    public function getCapacidade(): float {
        return $this->capacidade_maxima;
    }

    public function getPesoAtual(): float {
        $pesoTotal = 0;
        foreach ($this->equipamentos as $equipamento) {
            $pesoTotal += $equipamento->getPeso();
        }
        return $pesoTotal;
    }

    public function adicionarEquipamento(Equipamento $equipamento): bool {
        $pesoAposAdicionar = $this->getPesoAtual() + $equipamento->getPeso();

        if ($pesoAposAdicionar > $this->capacidade_maxima) {
            echo "Erro: O equipamento '{$equipamento->getNome()}' excede a capacidade da mochila!" . PHP_EOL;
            return false;
        }

        $this->equipamentos[] = $equipamento;
        return true;
    }

    public function removerEquipamento(Equipamento $equipamento): bool {

        foreach ($this->equipamentos as $key => $equipamentoRemover) {
            if ($equipamento->getNome() == $equipamentoRemover->getNome()) {
                unset($this->equipamentos[$key]);
                $this->equipamentos = array_values($this->equipamentos);
                
                return true;
            }
        }        
        echo "Equipamento não encontrado na mochila." . PHP_EOL;     
        return False;
    }

    public function getEquipamentos(): string {
        if (empty($this->equipamentos)) {
            return "A mochila está vazia." . PHP_EOL;
        }

        $retorno = "";
        foreach ($this->equipamentos as $equipamento) {
            $retorno .= "Equipamento: {$equipamento->getNome()} | Peso: {$equipamento->getPeso()} | Moedas: {$equipamento->getMoedas()}" . PHP_EOL;
        }
        return $retorno;
    }
}
?>