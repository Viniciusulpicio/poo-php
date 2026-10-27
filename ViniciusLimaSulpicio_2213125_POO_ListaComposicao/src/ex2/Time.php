<?php

namespace App\ex2;
use InvalidArgumentException;
use App\ex2\Jogador;

class Time{
    public function __construct(
        private string $nome,
        private array $escalacao = [],
        private int $totalJogador = 0,
    )
    {
        if($nome == ""){
            throw new InvalidArgumentException("O nome esta vazio");
        }
    }

    public function cadastrarJogador(Jogador $jogador): bool{

        foreach($this->escalacao as $jogadorExistente){
            if($jogadorExistente->getNumero() == $jogador->getNumero()){
                echo "Dois jogadores não podem ter o mesmo numero" . PHP_EOL;
                return False;
            }
        }
        $this->totalJogador += 1;
        $this->escalacao[] = $jogador;
        return True;
    }

    public function getEscalacao(): string{
        $status = "";

        foreach($this->escalacao as $jogador){
            $status .= "Jogador: {$jogador->getNome()} Nº: {$jogador->getNumero()} Posicao: {$jogador->getPosicao()}" . PHP_EOL;
        }

        return $status . PHP_EOL;

    }

    public function totalJogadores(): int{
        return $this->totalJogador;
    }

    public function localizarJogador(int $localizarNumero): string {
        foreach ($this->escalacao as $jogadorExistente) {
            if ($jogadorExistente->getNumero() == $localizarNumero) {
                return "Jogador encontrado: " . PHP_EOL . "Jogador: " . $jogadorExistente->getNome() . " Nº: " . $jogadorExistente->getNumero() . " Posicao: " . $jogadorExistente->getPosicao() . PHP_EOL;
            }
        }

        return "Jogador com número {$localizarNumero} não existe" . PHP_EOL;
    }

    public function status(): string{
        return "Time: {$this->nome}" . PHP_EOL . "Escalação {$this->getEscalacao()}";
    }

}



?>