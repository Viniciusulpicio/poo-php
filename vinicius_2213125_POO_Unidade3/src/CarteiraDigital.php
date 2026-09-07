<?php

namespace App;

use InvalidArgumentException;

class CarteiraDigital{
    public function __construct(
        private string $proprietario,
        private float $saldo,
        private float $limiteDiario,
        private float $gastoHoje = 0.0
    ){
        if ($this->proprietario === "" || $this->saldo < 0 || $this->limiteDiario <= 0){
            throw new InvalidArgumentException("Valor inválido");
        }
        $this->gastoHoje = 0.0;
    }

    private function validarPagamento(float $valor): void{
        if ($valor <= 0){
            echo "Valor de pagamento inválido." . PHP_EOL;
        } else if ($valor > $this->saldo){
            echo "Saldo insuficiente." . PHP_EOL;
        } else if (($this->gastoHoje + $valor) > $this->limiteDiario){
            echo "Limite diário excedido." . PHP_EOL;
        }
    }

    public function receber(float $valor): void{
        if ($valor > 0){
            $this->saldo += $valor;
        } else{
            echo "Valor de recebimento inválido." . PHP_EOL;
        }
    }

    public function pagarPix(float $valor): void{
        if ($this->validarPagamento($valor)){
            $this->saldo -= $valor;
            $this->gastoHoje += $valor;
        }
    }

    public function iniciarNovoDia(): void{
        $this->gastoHoje = 0.0;
    }

    public function consultarSaldo(): float{
        return $this->saldo;
    }

    public function consultarLimiteDisponivel(): float{
        return $this->limiteDiario - $this->gastoHoje;
    }

    public function resumo(): string{
        return "O proprietário: " . $this->proprietario . " tem saldo: " . $this->saldo . ", limite disponível: " . $this->consultarLimiteDisponivel() . " e gastou hoje: " . $this->gastoHoje . PHP_EOL;
    }
}

?>
