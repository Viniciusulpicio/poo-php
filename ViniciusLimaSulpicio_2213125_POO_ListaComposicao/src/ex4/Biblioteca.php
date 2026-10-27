<?php

namespace App\ex4;
use App\ex4\Livros;
use InvalidArgumentException;

class Biblioteca{
    public function __construct(
        private string $nome,
        private array $biblioteca = [],
    )
    {
        if($nome == ""){
            throw new InvalidArgumentException("Nome não pode ser vazio");
        }
    }
    
    public function adicionarLivro(Livros $livro): bool{
        foreach($this->biblioteca as $livros){
            if($livros->getISBN() == $livro->getISBN()){
                echo "Não é possivel adicionar 2 livros com o mesmo ISBN";
                return False;
            }
        }
        $this->biblioteca[] = $livro;
        return True;
    }

    public function obras(): string{
        $return = ""; 
        foreach($this->biblioteca as $livros){
            $return .= "{$livros->getLivro()}" . PHP_EOL;
        }
        return $return;
    }

    public function emprestarLivro(Livros $livro): bool{
        if($livro->getDisponivel() == true){
            $livro->reservar();
            return True;
        }else{
            echo "O livro ja foi emprestado";
            return False;
        }
    }

    public function devolverLivro(Livros $livro): bool{
        if($livro->getDisponivel() == false){
            $livro->devolver();
            return True;
        }else{
            echo "O livro ja está na biblioteca";
            return False;
        }
    }

    public function catalogo(): string{
        $status = " ";
        $status .= PHP_EOL . "A biblioteca {$this->nome}" . PHP_EOL . "Obras: " . PHP_EOL . $this->obras() . PHP_EOL;
        return $status;
    }
}


?>