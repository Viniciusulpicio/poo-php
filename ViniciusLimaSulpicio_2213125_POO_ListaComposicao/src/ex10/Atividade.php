<?php

namespace App\ex10;
use InvalidArgumentException;

class Atividade{
    public function __construct(
        private string $titulo,
        private float $max_ponto,
        private float $nota = 0,
        private bool $correcao = false,
    )
    {
        if($titulo ==  "" || $max_ponto < 0){
            throw new InvalidArgumentException("Argumentos inválidos");
        }
    }

    public function getTitulo(): string{
        return $this->titulo;
    }

    public function getMaxPontos(): float{
        return $this->max_ponto;
    }

    public function getNota(): float|string
    {
        if ($this->correcao === false) {
            return 'Ainda não corrigido';
        }

        return (float) $this->nota;
    }

    public function getCorrigido(): bool{
        return $this->correcao;
    }

    public function corrigir(float $nota_recebida): bool{
        if($nota_recebida < 0 || $nota_recebida > $this->max_ponto || $this->correcao == true){
            echo "Argumentos inválidos" . PHP_EOL;
            return false;
        }
        
        $this->nota = $nota_recebida;
        $this->correcao = true;
        return True;
    }

    public function statusAtividade(): string{
        $retorno = "";
        $retorno .= "Titulo: {$this->getTitulo()} | Nota maxima: {$this->getMaxPontos()} | Nota recebida: {$this->getNota()} " . PHP_EOL;
        return $retorno;
    }
}


?>