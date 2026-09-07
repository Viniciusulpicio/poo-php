<?php

namespace App;

use InvalidArgumentException; 

class DroneEntrega{
    public function __construct(
        private string $identificador,
        private float $cargaMaximaKg,
        private int $bateria = 100,
        private float $cargaAtualKg = 0.0,
        private string $status = "disponivel"
    ){
        if ($this->identificador === "" || $this->cargaMaximaKg <= 0){
            throw new InvalidArgumentException("Valor inválido");
        }
    }

    public function carregarPacote(float $peso): void{
        if ($peso > 0 && ($this->cargaAtualKg + $peso) <= $this->cargaMaximaKg && $this->status === "disponivel"){
            $this->cargaAtualKg += $peso;
        } else {
            echo "Não foi possível carregar o pacote. Valor inválido, excesso de peso ou drone indisponível." . PHP_EOL;
        }
    }

    private function consumoEstimado(float $distanciaKm): int{
        if ($distanciaKm > 0){
            $consumoBasePorKm = 5;            
            return (int)($distanciaKm * $consumoBasePorKm);
        }
        return 0;
    }

    public function decolar(float $distanciaKm): void{
        if ($distanciaKm <= 0){
            echo "Não é possível decolar. Distância inválida." . PHP_EOL;
            return;
        }

        $consumo = $this->consumoEstimado($distanciaKm);

        if ($this->status === "disponivel" && $this->cargaAtualKg > 0 && $this->bateria >= $consumo){
            $this->status = "em_voo";
            $this->bateria -= $consumo;
            echo "Decolagem autorizada! Destino a {$distanciaKm}km." . PHP_EOL;
        } else{
            echo "Não é possível decolar. Verifique o status, a carga ou a bateria." . PHP_EOL;
        }
    }

    public function finalizarEntrega(): void{
        if ($this->status === "em_voo"){
            $this->cargaAtualKg = 0.0;
            $this->status = "disponivel";
        }else{
            echo "Não é possivel finalizar a entrega" . PHP_EOL; 
        }
    }

    public function recarregar(): void{
        if ($this->status !== "em_voo"){
            $this->bateria = 100;
        }else{
            echo "Não foi possivel recarregar o drone em voo." . PHP_EOL;
        }
    }

    public function status(): string{
        return "Drone #" . $this->identificador . ". Status: " . $this->status . ". Bateria: " . $this->bateria . "%. Carga Atual: " . $this->cargaAtualKg . "kg / " . $this->cargaMaximaKg . "kg" . PHP_EOL;
    }
}

?>