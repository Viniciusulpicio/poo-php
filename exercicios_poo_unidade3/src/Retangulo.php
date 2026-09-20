<?php

namespace App;


class Retangulo {
    public function __construct(
        private float $largura,
        private float $altura,
    ) {
        if ($largura < 0 || $altura < 0){
            echo "Os valores devem ser maior que zero" . PHP_EOL;
        }
    }

    public function area(): float{
        return $this->altura * $this->largura;
    }

    public function perimetro(): float{
        return $this->altura + $this->largura;
    }

    public function ehQuadrado(): bool{
        if ($this->altura === $this->largura){
            return True;
        }else{
            return False;
        }
    }

}


?>