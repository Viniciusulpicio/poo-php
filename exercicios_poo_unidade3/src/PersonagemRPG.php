<?php

namespace App;
use InvalidArgumentException;

class PersonagemRPG{
    public function __construct(
        public string $nome,
        public string $classe,
        public int $vida,
        private int $energia,
    )
    {
        if ($energia < 100 || $energia > 100 || $vida > 100 || $vida < 100){
            throw new InvalidArgumentException("A vida e energia variam entre 0 e 100");
        }
    }
    

    public function receberDano(int $pontos): bool{
        if($pontos > 0){
            $this->vida = $this->vida - $pontos;
            return True;
        }else{
            echo "Valor de dano inválido";
            return False;
        }
    }

    public function curar(int $pontos): bool{
        if($pontos > 0){
            if ($pontos + $this->vida > 100){
                $this->vida = 100;
            }else{
                $pontos + $this->vida;
            }
            return True;
        }else{
            echo "Valor de dano inválido";
            return False;
        }
    }

    public function usarHabilidade(int $custoEnergia): bool{
        if ($custoEnergia <= $this->energia && $this->vida > 0){
            $this->energia -= $custoEnergia;
            echo "Habilidade usada" . PHP_EOL;
            return True;
        }else{
            echo "Vida abaixo de 0 ou energia inválida" . PHP_EOL;
            return False;
        }
    }

    public function descansar(int $pontos): bool{
        if($pontos > 0){
            if ($pontos + $this->energia > 100){
                $this->energia = 100;
            }else{
                $pontos + $this->energia;
            }
            return True;
        }else{
            echo "Valor de dano inválido";
            return False;
        }
    }

    public function status(): string{
        return "O personagem " . $this->nome . " e classe " . $this->classe . " esta com " . $this->vida . " de vida e " . $this->energia . " de energia";
    }
}


?>