<?php

namespace App;

use InvalidArgumentException;

class DroneInspecao {
    public function __construct(
        public string $modelo,
        private int $bateria = 100, 
        private float $distanciaTotal = 0.0,
        private bool $emVoo = false
    ) {
        if ($this->bateria > 100 || $this->bateria < 0) {
            throw new InvalidArgumentException("A bateria deve ficar entre 0 e 100");
        }
    }

    public function decolar(): bool {
        if ($this->bateria >= 20 && $this->emVoo == false) {
            $this->emVoo = true;
            return true;
        } else {
            echo "Erro: Bateria baixa ou drone já em voo." . PHP_EOL;
            return false;
        }
    }

    public function voar(float $km): bool {
        if ($this->emVoo == false) {
            echo "Erro: Decole o drone antes de voar." . PHP_EOL;
            return false;
        }

        $custoBateria = $km * 5; 

        if ($this->bateria >= $custoBateria) {
            $this->bateria -= $custoBateria;
            $this->distanciaTotal += $km;
        } else {
            $distanciaPossivel = $this->bateria / 5;
            $this->distanciaTotal += $distanciaPossivel;
            $this->bateria = 0;
            
            echo "Aviso: Bateria esgotada no ar! O drone percorreu apenas {$distanciaPossivel} km e fez pouso forçado." . PHP_EOL;
            $this->pousar(); 
        }
        
        return true;
    }

    public function pousar(): bool {
        if ($this->emVoo == true) {
            $this->emVoo = false;
            return true;
        } else {
            echo "Erro: O drone já está pousado." . PHP_EOL;
            return false;
        }
    }

    public function recarregar(int $percentual): int {
        if ($this->bateria + $percentual > 100) {
            $this->bateria = 100;
        } else {
            $this->bateria += $percentual;
        }
        return $this->bateria;
    }

    public function status(): string {
        $estadoVoo = $this->emVoo ? "Em voo" : "Pousado";
        return "[{$this->modelo}] Bateria: {$this->bateria}% | Distância Total: {$this->distanciaTotal} km | Situação: {$estadoVoo}";
    }
}