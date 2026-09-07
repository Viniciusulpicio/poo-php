<?php

namespace App;

use InvalidArgumentException;

class PersonagemRPG{
    private int $vidaAtual;
    private int $energia;

    public function __construct(
        private string $nome,
        private int $vidaMaxima
    ){
        if ($this->nome === ""){
            throw new InvalidArgumentException("Valor inválido");
        }
        if ($this->vidaMaxima <= 0 ){
            throw new InvalidArgumentException("Valor inválido");
        }

        $this->vidaAtual = $this->vidaMaxima;
        $this->energia = 100; 
    }

    public function estaVivo(): bool{
        return $this->vidaAtual > 0;
    }

    public function sofrerDano(int $dano): void{
        if ($dano <= 0){
            echo "Dano inválido" . PHP_EOL;
            return;
        }

        $this->vidaAtual = max(0, $this->vidaAtual - $dano);
    }

    public function curar(int $pontos): void{
        if (!$this->estaVivo()){
            echo "{$this->nome} está derrotado e não pode se curar" . PHP_EOL;
            return;
        }

        if ($pontos <= 0){
            echo "Valor de cura inválido" . PHP_EOL;
            return;
        }

        $this->vidaAtual = min($this->vidaMaxima, $this->vidaAtual + $pontos);
    }

    public function executarAtaque(int $custoEnergia, int $danoBase): int{
        if (!$this->estaVivo()){
            echo "{$this->nome} está derrotado e não pode atacar" . PHP_EOL;
            return 0;
        }

        if ($custoEnergia <= 0 || $danoBase <= 0){
            echo "Custo de energia ou dano inválido" . PHP_EOL;
            return 0;
        }

        if ($this->energia < $custoEnergia){
            echo "{$this->nome} não tem energia suficiente para atacar" . PHP_EOL;
            return 0;
        }

        $this->energia -= $custoEnergia;
        return $danoBase;
    }

    public function descansar(): void{
        if (!$this->estaVivo()){
            echo "{$this->nome} está derrotado e não pode descansar" . PHP_EOL;
            return;
        }

        $this->energia = min(100, $this->energia + 25);
    }

    public function status(): string{
        $situacao = $this->estaVivo() ? "Vivo" : "Derrotado";
        return "Personagem: " . $this->nome . " | Vida: " . $this->vidaAtual . "/" . $this->vidaMaxima . " | Energia: " . $this->energia . "/100 | Situação: " . $situacao . PHP_EOL;
    }
}

?>