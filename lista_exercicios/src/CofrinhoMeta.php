<?php

namespace App;
use InvalidArgumentException;

class CofrinhoMeta{
    public function __construct(
        public string $objetivo,
        private float $saldo,
        private float $meta
    )
    {
        if($meta < 0){
            throw new InvalidArgumentException("A meta deve ser maior que zero");
        }
        if($saldo < 0){
            throw new InvalidArgumentException("O saldo deve ser maior que zero");
        }
    }

    public function depositar(float $valor): bool{
        if($valor > 0){
            $this->saldo = $this->saldo + $valor;
            return True;
        }else{
            return False;
        }
    }

    public function retirar(float $valor): bool{
        if($valor > 0){
            $this->saldo = $this->saldo - $valor;
            return True;
        }else{
            return False;
        }
    }

    public function percentualDaMeta(): float{
        return ($this->saldo*100) / $this->meta ;
    }

    public function metaAtingida(): bool{
        if ($this->saldo >= $this->meta){
            return True;
        }else{
            return False;
        }
    }

    public function progresso(): string{
        if ($this->metaAtingida() === True){
            return "atingida";
        }else{
            return "nao atingida";
        }
    }

    public function resumo(): string{
        return "Seu cofrinho para " . $this->objetivo . " esta com " . $this->saldo . " de saldo e " . $this->percentualDaMeta() . "% de meta concluida e ela foi " . $this->progresso() . PHP_EOL;
    }
    
}

?>