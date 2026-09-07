<?php

namespace App;

use InvalidArgumentException;

class ConfiguracaoJogo{
    public function __construct(
        private int $volume,
        private string $dificuldade,
        private bool $telaCheia
    ){
        if ($this->volume < 0 || $this->volume > 100){
            throw new InvalidArgumentException("Valor inválido");
        }
        if ($this->dificuldade !== "facil" && $this->dificuldade !== "normal" && $this->dificuldade !== "dificil"){
            throw new InvalidArgumentException("Valor inválido");
        }
    }

    public function alterarVolume(int $volume): void{
        if ($volume < 0 || $volume > 100){
            echo "Volume inválido." . PHP_EOL;
        } else{
            $this->volume = $volume;
        }
    }

    public function alterarDificuldade(string $dificuldade): void{
        if ($dificuldade !== "facil" && $dificuldade !== "normal" && $dificuldade !== "dificil"){
            echo "Dificuldade inválida." . PHP_EOL;
        } else{
            $this->dificuldade = $dificuldade;
        }
    }

    public function alternarModoTelaCheia(): void{
        $this->telaCheia = !$this->telaCheia;
    }

    public function alternarTelaCheia(): void{
        $this->alternarModoTelaCheia();
    }

    public function resumo(): string{
        $modo = $this->telaCheia ? "Ativada" : "Desativada";
        return "Configuração: Volume: " . $this->volume . "/100, Dificuldade: " . $this->dificuldade . ", Tela Cheia: " . $modo . PHP_EOL;
    }
}

?>
