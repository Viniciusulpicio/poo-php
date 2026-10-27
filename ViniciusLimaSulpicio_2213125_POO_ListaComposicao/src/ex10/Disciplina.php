<?php

namespace App\ex10;
use InvalidArgumentException;
use App\ex10\Atividade;

class Disciplina{
    public function __construct(
        private string $nome,
        private array $atividades = [],
    )
    {
        if($nome == ""){
            throw new InvalidArgumentException("Argumento inválido");
        }
    }

    public function adicionarAtividade(Atividade $atividade): bool{
        foreach($this->atividades as $array_atividade){
            if($atividade->getTitulo() == $array_atividade->getTitulo()){
                echo "Já exite uma atividade com esse titulo" . PHP_EOL;
                return false;
            }
        }
        $this->atividades[] = $atividade;
        return true;

    }

    public function exibirAtividades(): string{
        $retorno = "";

        foreach($this->atividades as $array_atividade){
            $retorno .= $array_atividade->statusAtividade();
        }

        return $retorno;
    }

    public function temAtividade(Atividade $atividade): bool {
        foreach($this->atividades as $a) {
            if($a === $atividade) {
                return true;
            }
        }
        return false;
    }

    public function calcularTotalNotas(): float {
        $total = 0;
        foreach($this->atividades as $a) {
            if($a->getCorrigido()) {
                $total += (float)$a->getNota();
            }
        }
        return $total;
    }

    public function calcularMaximoAtividades(): float {
        $total = 0;
        foreach($this->atividades as $a) {
            $total += $a->getMaxPontos();
        }
        return $total;
    }
}

?>