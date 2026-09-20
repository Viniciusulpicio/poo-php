<?php

namespace App;

use InvalidArgumentException;

class Temperatura {
    public function __construct(
        private float $celsius,
    ) {
        if ($this->celsius < -273.15) {
            throw new InvalidArgumentException("A temperatura não pode ser inferior a -273.15 °C.");
        }
    }

    public function alterar(float $novoValor): bool {
        if ($novoValor < -273.15) {
            return false;
        }
        $this->celsius = $novoValor; 
        return true;
    }

    public function emFahrenheit(): float {
        return ($this->celsius * 9 / 5) + 32;
    }

    public function emKelvin(): float {
        return $this->celsius + 273.15;
    }

    public function descricao(): string {
        return "Temperatura: {$this->celsius} °C | " . $this->emFahrenheit() . " °F | " . $this->emKelvin() . " K";
    }
}