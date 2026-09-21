<?php 
namespace App; 

use InvalidArgumentException; 

class RoboArena { 
    public function __construct( 
        public string $nome, 
        private int $energia = 100, 
        private int $integridade = 100, 
        private int $pontuacao = 0, 
    ) { 
        if ($energia < 0 || $energia > 100 || $integridade < 0 || $integridade > 100 || $pontuacao < 0) { 
            throw new InvalidArgumentException("Argumentos inválidos"); 
        } 
    } 

    public function treinar(): bool { 
        if ($this->energia < 20 || $this->integridade <= 0) {
            echo "energia ou integridade baixa" . PHP_EOL;
            return false;
        }
        
        $this->energia -= 20;
        $this->pontuacao += 10;
        return true;
    } 

    public function combate(): bool { 
        if ($this->energia < 30 || $this->integridade < 25) { 
            echo "energia ou integridade baixa" . PHP_EOL;
            return false; 
        }else{
            $this->energia -= 30;
            $this->integridade -= 25;
            $this->pontuacao += 25; 
            return true; 
        }
    } 

    public function recarga(): bool { 
        if ($this->energia >= 100) {
            echo "bateria completa";
            return false;
        }else{
            $this->energia = 100; 
            return true; 
        }
    } 

    public function reparo(): bool { 
        if ($this->integridade >= 100) {
            echo "integridade completa";
            return false;
        }
        $this->integridade = 100;
        return true; 
    } 

    public function status(): string {
        return "O robo " . $this->nome . " esta com " . $this->energia . " de energia e " . $this->integridade . " de integridade, com pontuação de " . $this->pontuacao . PHP_EOL;
    }
} 
?>
