<?php

namespace App;
use InvalidArgumentException;

class ProdutoEstoque{
    public function __construct(
        private string $nome,
        private float $preco,
        private int $estoque
    ){
        if ($this->nome === "" || $this->preco <= 0 || $this->estoque < 0){
            throw new InvalidArgumentException("Valor inválido");
        }
    }

    public function  aplicarDesconto(float $percentual): void{
        if($percentual > 0 && $percentual <= 50){
            $this->preco -= ($this->preco * ($percentual / 100));
        } else{
            echo "Valor de desconto inválido" . PHP_EOL;
        }
    }

    public function repor(int $quantidade): void{
        if($quantidade > 0){
            $this->estoque += $quantidade;
        } else{
            echo "Não é possivel repor com valores negativos" . PHP_EOL;
        }
    }

    public function reservar(int $quantidade): void{
        if($quantidade > 0 && $quantidade <= $this->estoque){
            $this->estoque -= $quantidade;
        } else{
            echo "Não é possivel reservar valores maior que o estoque ou quantidades negativas" . PHP_EOL;
        }
    }

    public function consultarPreco(): float {
        return $this->preco;
    }

    public function consultarEstoque(): int {
        return $this->estoque;
    }

    public function resumo(): string{
        return "O produto: " . $this->nome . " tem " . $this->estoque . " itens no estoque, e custa: " . $this->preco . PHP_EOL;
    }

}

?>
