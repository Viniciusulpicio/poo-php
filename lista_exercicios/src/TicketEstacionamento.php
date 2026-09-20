<?php

namespace App;
use InvalidArgumentException;
use NumberFormatter;

class TicketEstacionamento{
    public function __construct(
        public string $placa,
        private int $entradaMin,
        private float $tarifaHora,
        private ?int $saidaMin = null,
    )
    {
        if ($tarifaHora <= 0){
            throw new InvalidArgumentException("A tarifa não deve ser menor que zero");
        }
    }

    public function registrarSaida(int $minuto): bool{
        if ($this->saidaMin === null & $minuto > $this->entradaMin){
            $this->saidaMin = $minuto;
            return True;
        }else{
            return False;
        }
    }

    public function duracaoMin(): int{
        if ($this->saidaMin === null) {
            return 0;
        }
        return $this->saidaMin - $this->entradaMin;
    }

    public function valorAPagar(): float {
        $duracao = $this->duracaoMin();
        if ($duracao <= 0) {
            return 0.0;
        }

        $hora = intdiv($duracao, 60);

        if ($duracao % 60 > 0) {
            $hora += 1;
        }

        return $hora * $this->tarifaHora;
    }

    public function resumo(): string{
        return "O carro " . $this->placa . " ficou: " . $this->duracaoMin() . " minutos no local e deve pagar " . number_format($this->valorAPagar(), 2, ',', '.') ;
    }


}



?>