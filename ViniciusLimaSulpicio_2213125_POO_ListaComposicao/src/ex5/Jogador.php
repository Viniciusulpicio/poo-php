<?php

namespace App\ex5;
use App\ex5\Missao;
use InvalidArgumentException;


class Jogador{
    public function __construct(
        private string $nome,
        private array $save = [], 
    )
    {
        if ($nome == ""){
            throw new InvalidArgumentException("Nome vazio");
        }
    }

    public function adicionarMissao(Missao $missao): void{
        $this->save[] = $missao;
    }

    public function fazerMissao(string $tituloMissao): bool{
        foreach ($this->save as $missao) {
            if ($missao->getNome() === $tituloMissao) {
                if ($missao->getSituacao()) {
                    return false;
                }
                $missao->completarMissao();
                return true;
            }
        }
        echo "Não foi possivel adicionar a missão" . PHP_EOL;
        return false;
    }

    public function totalMoedas(): int{
        $total = 0;
        foreach ($this->save as $missao) {
            if ($missao->getSituacao()) {
                $total += $missao->getMoedas();
            }
        }
        return $total;
    }


    public function exibirMissoesPendentes(): string {
    $linhas = ["--- Missões Pendentes ---"];
    $contagem = 0;

    foreach ($this->save as $missao) {
        if (!$missao->getSituacao()) {
            $linhas[] = $missao->getMissao();
            $contagem++;
        }
    }

    if ($contagem === 0) {
        return "Nenhuma missão pendente!";
    }

    return implode("\n", $linhas);
    }


    public function resumo(): string{
        $linhas = ["Jogador: {$this->nome}"];
        $linhas[] = "Total de Moedas Concluídas: {$this->totalMoedas()}";
        $linhas[] = "--- Lista de Missões ---";

        if (empty($this->save)) {
            $linhas[] = "Nenhuma missão cadastrada.";
        } else {
            foreach ($this->save as $missao) {
                $linhas[] = $missao->getMissao();
            }
        }

        return implode("\n", $linhas);
    }
}


?>