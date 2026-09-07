<?php

namespace App;
use InvalidArgumentException;

class ContaBancaria {
    public function __construct(
        private string $titular,
        private float $saldo
    ){
        if($this->titular === "" || $this->saldo < 0){
            throw new InvalidArgumentException("Valor inválido");
        }
    }

    public function depositar(float $valor): void{
        if ($valor > 0){
            $this->saldo += $valor;
        } else {
            echo "Valor de deposito inválido." . PHP_EOL;
        }
    }

    public function sacar(float $valor): void{
        if ($valor > 0 && $valor <= $this->saldo){
            $this->saldo -= $valor;
        } else {
            echo "Valor de saque inválido ou saldo insuficiente." . PHP_EOL;
        }
    }

    public function consultarSaldo(): float{
        return $this->saldo;
    }

    public function resumo(): string{
        return "O saldo do usuário " . $this->titular . " é: " .  $this->consultarSaldo() . PHP_EOL;
    }
}

?>