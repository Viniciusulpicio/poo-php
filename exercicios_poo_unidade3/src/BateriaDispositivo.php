<?php

namespace App;

use InvalidArgumentException;

class BateriaDispositivo {
    
    public function __construct(
        public string $dispositivo,
        private int $carga
    ) {
        if($carga > 100 || $carga < 0){
            throw new InvalidArgumentException("A carga deve ficar entre 0 e 100");
        }
    }

    public function usar(int $minutos): bool {
        if($this->carga <= 0){
            return false;
        }
        $i = 0;
        while($i < $minutos){
            if($i % 5 == 0) {
                if($this->carga <= 0) {
                    return false;
                }
                $this->carga--;
            }
            $i++;
        }

        return true; 
    }

    public function carregar(int $percentual): int {
        $adicionado = 0;
        $i = 0;
        
        while($i < $percentual) {
            if($this->carga < 100) {
                $this->carga++;
                $adicionado++;
            }
            $i++;
        }
        
        return $adicionado;
    }

    public function nivel(): int {
        return $this->carga;
    }

    public function estaCritica(): bool {
        if($this->carga <= 15) {
            return true;
        } else {
            return false;
        }
    }

    public function status(): string {
        return "Dispositivo: " . $this->dispositivo . " | Nivel: " . $this->carga . "%";
    }
}
?>