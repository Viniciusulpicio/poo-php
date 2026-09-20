<?php

namespace App;
use InvalidArgumentException;

class DroneInspecao{
    public function __construct(
        public string $modelo,
        private int $bateria, 
        private float $distanciaTotal,
        private bool $emVoo,
    )
    {
        throw new \Exception('Not implemented');
    }
}

?>