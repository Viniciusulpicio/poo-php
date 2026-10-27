<?php

namespace App\ex6;
use InvalidArgumentException;
use App\ex6\Aluno;

class Turma{
    public function __construct(
        private string $turma,
        private array $classe = [],
    )
    {
        if($turma == ""){
            throw new InvalidArgumentException("Nome vazio");
        }
    }

    public function adicionarAluno(Aluno $aluno): bool {
        foreach ($this->classe as $alunoExistente) {
            if ($alunoExistente->getRa() === $aluno->getRa()) {
                echo "Não podem existir 2 alunos com mesmo RA" . PHP_EOL;
                return false;
            }
        }
        
        $this->classe[] = $aluno;
        return true; 
    }

    public function getMedia(): float{
        $media = 0;
        $contador = 0;
        foreach($this->classe as $classe){
            $media += $classe->getNota() ;
            $contador += 1;
        }
        $media = $media / $contador;
        return $media;
    }


    public function getTurma(): string{
        $string = "";
        foreach($this->classe as $classe){
            $string .= $classe->getAluno() . PHP_EOL;
        }
        return $string;
    }

    public function status(): string{
        $mediaArredondada = round($this->getMedia(), 2);
        $string = "";
        $string .= "A turma : {$this->turma} | Média: {$mediaArredondada}" . PHP_EOL . "Alunos: " . PHP_EOL . $this->getTurma();
        return $string;
    }

}

?>