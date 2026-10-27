<?php

namespace App\ex3;
use App\ex3\Produto;

class Carrinho{
    public function __construct(
        private string $nome,
        private array $carrinho = [],
        private float $total = 0,
    )
    {}

    public function adicionarProduto(Produto $prod): bool{
        foreach($this->carrinho as $produto){
            if($produto->getNome() == $prod->getNome()){
                echo "Não é possivel adicionar 2 produtos iguais ao carrinho" . PHP_EOL;
                return false;
            }
        }

        $this->total += $prod->getPreco();
        $this->carrinho[] = $prod;
        return true;
    }

    public function getCarrinho(): string{
        $retorno = " ";
        foreach($this->carrinho as $item){
            $retorno .= "- {$item->getNome()}" . PHP_EOL;
        }
        return $retorno;
    }

    public function valorTotal(): float{
        return $this->total;
    }

    public function status(): string{
        $status = " ";
        $status .= PHP_EOL . "Nome: {$this->nome}" . PHP_EOL . "Itens: " . PHP_EOL . $this->getCarrinho() . PHP_EOL . "Total: {$this->valorTotal()}" . PHP_EOL;
        return $status;
    }
}


?>