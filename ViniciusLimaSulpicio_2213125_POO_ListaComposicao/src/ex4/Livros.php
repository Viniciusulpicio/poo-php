<?php

namespace App\ex4;
use InvalidArgumentException;

class Livros{
    public function __construct(
        private string $nome,
        private string $autor,
        private int $isbn,
        private bool $disponivel = true,
    )
    {
        if($nome == "" || $autor == "" || $isbn <= 0 || strlen($isbn) > 13){
            throw new InvalidArgumentException("Argumentos inválidos");
        }
    }

    public function getNome(): string{
        return $this->nome;
    }

    public function getDisponivel(): bool{
        return $this->disponivel;
    }

    public function reservar(): void{
        $this->disponivel = false; 
    }

    public function devolver(): void{
        $this->disponivel = true; 
    }

    public function getISBN(): int{
        return $this->isbn;
    }

    public function getLivro(): string{
        $disponivel = "";
        if($this->disponivel == true){
            $disponivel = "Disponivel";
        }else{
            $disponivel = "Não disponivel";
        }
        return "Livro: {$this->nome} | Autor: {$this->autor} | ISBN: {$this->isbn} | Disponivel: {$disponivel}";
    }

}



?>