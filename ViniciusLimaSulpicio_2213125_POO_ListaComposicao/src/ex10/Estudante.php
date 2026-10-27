<?php

namespace App\ex10;
use InvalidArgumentException;
use App\ex10\Atividade;
use App\ex10\Disciplina;

class Estudante {
    public function __construct(
        private string $nome,
        private int $RA,
        private array $disciplinas = [],
    ) {
        if($nome == "" || $RA < 0){
            throw new InvalidArgumentException("Argumentos inválidos");
        }
    }

    public function adicionarDisciplina(Disciplina $disciplina): void {
        $this->disciplinas[] = $disciplina;
    }

    public function aplicarNota(Atividade $atividade, float $nota): bool {
        foreach($this->disciplinas as $disciplina) {
            if($disciplina->temAtividade($atividade)){
                return $atividade->corrigir($nota);
            }
        }
        echo "A atividade não está nas disciplinas do aluno {$this->nome}" . PHP_EOL;
        return false;
    }

    public function getAtividades(): string {
        $retorno = "";
        foreach($this->disciplinas as $disciplina){
            $retorno .= $disciplina->exibirAtividades();
        }
        return $retorno;
    }

    public function desempenhoAcademico(): float {
        $somaNotas = 0;
        $somaValoresMaximos = 0;

        foreach($this->disciplinas as $disciplina) {
            $somaNotas += $disciplina->calcularTotalNotas();
            $somaValoresMaximos += $disciplina->calcularMaximoAtividades();
        }

        if ($somaValoresMaximos == 0) {
            return 0.0;
        }

        return $somaNotas / $somaValoresMaximos;
    }

    public function status(): string {
        $relatorio = "";
        $relatorio .= "Nome do Aluno: {$this->nome}" . PHP_EOL;
        $relatorio .= "RA: {$this->RA}" . PHP_EOL;
        $relatorio .= "----------------------------------------". PHP_EOL;
        $relatorio .= "DISCIPLINAS E ATIVIDADES:" . PHP_EOL . PHP_EOL;
        
        $atividades = $this->getAtividades();
        if ($atividades === "") {
            $relatorio .= "  Nenhuma disciplina/atividade cadastrada." . PHP_EOL;
        } else {
            $relatorio .= $atividades;
        }
        
        $relatorio .= "----------------------------------------" . PHP_EOL;
        
        $desempenhoDecimal = $this->desempenhoAcademico();
        $desempenhoPercentual = number_format($desempenhoDecimal * 100, 2, ',', '.');

        $relatorio .= "DESEMPENHO ACADÊMICO: {$desempenhoPercentual}%" . PHP_EOL;
        $relatorio .= "========================================" . PHP_EOL;

        return $relatorio;
    }
}


?>