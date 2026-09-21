<?php

namespace App;
use InvalidArgumentException;

class SobrevivenciaMarte{
    public function __construct(
        public string $nome, 
        private int $cargasOxigenio,
        private int $vida = 100,
        private int $energia = 100,
        private int $oxigenio = 100,
    )
    {
        if ($energia < 0 || $energia > 100 || $vida < 0 || $vida > 100 || $oxigenio < 0 || $oxigenio > 100) { 
            throw new InvalidArgumentException("Argumentos inválidos"); 
        } 
    }

    public function explorar(): bool{
        if($this->energia < 20 || $this->oxigenio <25 || $this->vida < 1){
            echo "Baixa energia ou oxigenio" . PHP_EOL;
            return False;
        }else{
            $this->energia -= 20;
            $this->oxigenio -= 25;
            return True;
        }
    }

    public function descansar(): bool{
        if($this->energia >= 100 ||  $this->vida < 1){
            echo "Personagem com energia maxima, ou vida zerada" . PHP_EOL;
            return False;
        }else{
            $this->energia = 100;
            return True;
        }
    }

    public function usarCilincro(): bool{
        if($this->cargasOxigenio < 1 || $this->vida < 1){
            echo "Suas cargas de oxigenio acabaram, ou vida zerada" . PHP_EOL;
            return False;
        }else{
            $this->cargasOxigenio -= 1;
            $this->oxigenio = 100;
            return True;
        }
    }

    public function status(): string{
        return "O astronauta" . $this->nome . " esta com vida: " . $this->vida . " energia: " . $this->energia . " oxigenio: " . $this->oxigenio . " cargas de oxigenio: " . $this->cargasOxigenio . PHP_EOL;
    }


}


?>