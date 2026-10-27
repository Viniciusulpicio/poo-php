<?php

namespace App;
use InvalidArgumentException;
use App\ItemPedido;

class Pedido{
    public function __construct(
        private array $itens = [],
    )
    {
    }

    public function adicionarItem(ItemPedido $item): bool{
       foreach ($this->itens as $itensExistentes){
            if(strtolower($itensExistentes->getProduto()) == strtolower($item->getProtudo())){
                echo "QUADRANULOSO";
                return False;
            }
       }
       $this->itens[] = $item; // nese formato se adiciona um item ao final da lista
       return True;
    }

    public function removerItens(string $itemRemovido): void{
        $contador = 0;
       foreach ($this->itens as $itensExistentes){
        if($itensExistentes == $itemRemovido){
            unset($itens[$contador]);
        }else{
            echo "GARIBALDO";
            $contador += 1;
        }
       }
    }

    public function calcularTotal(): float{
        $total = 0;
        foreach($this->itens as $item){
            $total += $item->calcularSubTotal();
        }
        return $total;
    }

    public function listarItem(): void {
        echo "Item no pedido: " . PHP_EOL;
        foreach($this->itens as $item){
            echo "- {$item->getProtudo()} | Sub total {$item->calcularSubTotal()}" . PHP_EOL;
        }
    }

}


?>