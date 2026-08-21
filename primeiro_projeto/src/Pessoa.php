<?php

namespace App;

class Pessoa{
    public function __construct(
        public string $nome,
        public int $idade
    ) {}

    public function apresentar(): string{
        return "Olá! Meu nome é {$this->nome} e tenho {$this->idade} anos." . PHP_EOL;
    }
}


?>