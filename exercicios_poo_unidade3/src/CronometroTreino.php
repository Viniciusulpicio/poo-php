<?php

namespace App;

use InvalidArgumentException;

class CronometroTreino{
    public function __construct(
        public string $atividade,
        private int $segundosAcumulados = 0,
    )
    {
        if ($segundosAcumulados < 0){
            throw new InvalidArgumentException('O tempo não pode ser negativo');
        }
    }

    public function adicionarTempo(int $segundos): bool {
        if ($segundos < 0){
            echo "O valor não pode ser negativo";
            return false;
        }else{
            return $this->segundosAcumulados += $segundos;
            return true;
        }
    }

    public function zerar(): void{
        $this->segundosAcumulados = 0;
    }

    public function totalMinutos(): float{
        return $this->segundosAcumulados/60;
    }

    public function formatarTempo(): string {
        $horas_form = floor($this->segundosAcumulados / 3600);
        $minutos_form = floor(($this->segundosAcumulados % 3600) / 60);
        $segundos_form = $this->segundosAcumulados % 60;

        return sprintf('%02d:%02d:%02d', $horas_form, $minutos_form, $segundos_form);
    }
}

?>