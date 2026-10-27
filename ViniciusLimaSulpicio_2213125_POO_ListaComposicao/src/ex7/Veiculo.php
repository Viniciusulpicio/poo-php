<?php

namespace App\ex7;
use InvalidArgumentException;

class Veiculo{
    public function __construct(
        private string $placa,
        private string $modelo,
        private string $proprietario,
    )
    {
        if($this->placa == "" || $this->modelo == "" || $this->proprietario == "" ){
            throw new InvalidArgumentException("Argumentos inválidos");
        }
    }

    public function getPlaca(): string{
        return $this->placa;
    }

    public function getModelo(): string{
        return $this->modelo;
    }

    public function getProprietario(): string{
        return $this->proprietario;
    }

    public function getCarro(): string{
        $carro = "";
        $carro .= "Placa: {$this->placa} | Modelo: {$this->modelo} | Proprietario {$this->proprietario}" . PHP_EOL;
        return $carro;
    }
}



?>