<?php

namespace App\ex8;
use InvalidArgumentException;

class Ingresso{
    public function __construct(
        private string $nome_espectador,
        private int $numero_poltrona,
        private float $valor
    )
    {
        if($nome_espectador == "" || $numero_poltrona < 0 || $valor < 0){
            throw new InvalidArgumentException("Argumentos invalidos");
        }
    }

    public function getNumeroPoltrona() {
        return $this->numero_poltrona;
    }

    public function getValorPago() {
        return $this->valor;
    }

    public function getNomeEspectador() {
        return $this->nome_espectador;
    }
}


?>