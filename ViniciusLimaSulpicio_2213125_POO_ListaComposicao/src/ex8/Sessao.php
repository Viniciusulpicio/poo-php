<?php 
namespace App\ex8; 

use App\ex8\Ingresso; 
use InvalidArgumentException; 

class Sessao { 
    public function __construct( 
        private string $nome_filme, 
        private int $quantidade_poltronas, 
        private array $ingresso_vendido = [], 
    ) 
    { 
        if ($this->nome_filme == "" || $this->quantidade_poltronas <= 0) { 
            throw new InvalidArgumentException("Argumentos inválidos"); 
        } 
    } 

    public function venderIngresso(Ingresso $ingresso): bool { 
        $poltrona = $ingresso->getNumeroPoltrona();

        if ($poltrona < 1 || $poltrona > $this->quantidade_poltronas) { 
            echo "Poltrona inválida" . PHP_EOL; 
            return false; 
        } 

        foreach ($this->ingresso_vendido as $ingressoVendido) { 
            if ($ingressoVendido->getNumeroPoltrona() == $poltrona) { 
                echo "Poltrona já ocupada por outro espectador" . PHP_EOL; 
                return false; 
            } 
        } 

        $this->ingresso_vendido[] = $ingresso; 
        return true; 
    } 

    public function quantidadeDisponivel(): int { 
        return $this->quantidade_poltronas - count($this->ingresso_vendido); 
    } 

    public function arrecadacaoTotal(): float { 
        $total = 0;
        foreach ($this->ingresso_vendido as $ingressoVendido) { 
            $total += $ingressoVendido->getValorPago(); 
        } 
        return $total; 
    } 

    public function consultarPoltronasOcupadas(): string { 
        if (count($this->ingresso_vendido) === 0) {
            return "Nenhuma poltrona ocupada" . PHP_EOL;
        }

        $retorno = ""; 
        foreach ($this->ingresso_vendido as $ingressoVendido) { 
            $retorno .= "Poltrona: {$ingressoVendido->getNumeroPoltrona()} - {$ingressoVendido->getNomeEspectador()}" . PHP_EOL; 
        } 
        return $retorno; 
    } 

    public function status(): string { 
        $retorno = "Sessão: {$this->nome_filme} | Vagas disponíveis: {$this->quantidadeDisponivel()} | Arrecadação: R$ {$this->arrecadacaoTotal()}" . PHP_EOL . 
                   "Poltronas ocupadas: " . PHP_EOL . 
                   $this->consultarPoltronasOcupadas(); 
        return $retorno; 
    } 
} 
?>