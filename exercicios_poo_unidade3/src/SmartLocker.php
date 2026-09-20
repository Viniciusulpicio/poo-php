<?php

namespace App;

class SmartLocker {
    public function __construct(
        private string $idLocker,
        private string $id_encomenda = "",
        private int $codigo_retirada = 0,
        private int $tentativas = 0,
        private string $status = "livre",
        private int $senha_condominio = 200926
    ) {}

    public function receberPacote(string $idEncomenda): bool {
        if ($this->status === "livre") {
            $this->status = "ocupado";
            $this->id_encomenda = $idEncomenda;
            
            $this->codigo_retirada = random_int(1000, 9999); 
            
            echo "Locker " . $this->idLocker . " Pacote " . $idEncomenda . " recebido. O código de retirada é: " . $this->codigo_retirada . PHP_EOL;
            return true;
        } else {
            echo "O Smart Locker " . $this->idLocker . " já está " . $this->status . PHP_EOL;
            return false;
        }
    }

    public function retiradaPacote(int $codigo): bool {
        if ($this->status !== "ocupado") {
            echo "Ação inválida: O armário está {$this->status}." . PHP_EOL;
            return false;
        }

        if ($codigo === $this->codigo_retirada) {
            $this->status = "livre";
            $this->tentativas = 0;
            $this->id_encomenda = "";
            $this->codigo_retirada = 0;
            
            echo "Sucesso! Armário aberto. Pacote retirado." . PHP_EOL;
            return true;
        } else {
            $this->tentativas += 1;
            echo "Código incorreto! Tentativa {$this->tentativas} de 3." . PHP_EOL;
            
            if ($this->tentativas >= 3) {
                $this->status = "bloqueado";
                echo "ALERTA: Armário bloqueado por excesso de tentativas!" . PHP_EOL;
            }
            return false;
        }
    }

    public function redefinir(int $senha): bool {
        if ($senha === $this->senha_condominio) {
            if ($this->status === "bloqueado") {
                $this->status = "ocupado"; 
                $this->tentativas = 0; 
                echo "Armário desbloqueado pelo condomínio. Status voltou para ocupado." . PHP_EOL;
                return true;
            } else {
                echo "O armário não está bloqueado." . PHP_EOL;
                return false;
            }
        } else {
            echo "Senha do condomínio incorreta. Não foi possível desbloquear." . PHP_EOL;
            return false;
        }
    }
}