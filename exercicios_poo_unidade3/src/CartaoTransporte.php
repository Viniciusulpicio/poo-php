<?php

namespace App;
use InvalidArgumentException;

class CartaoTransporte{
    public function __construct(
        public string $titular,
        private float $saldo,
        private float $tarifa,
        private int $viagensRealizadas = 0
    )
    {
        if($tarifa <= 0){
            throw new InvalidArgumentException("Tarifa deve ser posiiva");
        }
    }

    public function recarregar(float $valor): bool{
        if ($valor > 0){
            $this->saldo = $this->saldo + $valor;
            return True;
        }else{
            return False;
        }
    }

    public function embarcar():bool{
        if($this->saldo >= $this->tarifa){
             $this->saldo = $this->saldo - $this->tarifa;
             $this->viagensRealizadas = $this->viagensRealizadas + 1;
             return True;
        }else{
            return False;
        }
    }

    public function saldoAtual(): float{
        return $this->saldo;
    }

    public function viagensRealizadas(): int{
        return $this->viagensRealizadas;
    }

    public function resumo(): string{
        return "O saldo do " . $this->titular . " é " . $this->saldoAtual() . " e ja fez " . $this->viagensRealizadas() . " viagens" . PHP_EOL;
    }
}

?>