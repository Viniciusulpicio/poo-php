<?php

namespace App;

class Aluno {
    public function __construct(
        public string $nome,
        public int $ra,
        public string $email,
        public string $curso
    ) {}

    public function apresentar(): string{
        return "O nome do aluno é {$this -> nome}, seu RA: {$this -> ra}. Email: {$this -> email} e ele cursa {$this -> curso}";
    }

}


?>