<?php 

namespace App;

class Produto{
    public function __construct(
        public string $nome,
        public string $categoria,
        public string $marca,
        public int $preco
     ) {}

     public function detalhes(): string{
        return "O nome do produto é {$this -> nome} e sua categoria {$this -> categoria}, da marca {$this -> marca}, custando R$ {$this -> preco}";
     }
}


?>