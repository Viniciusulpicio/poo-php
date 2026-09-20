<?php

namespace App;
use InvalidArgumentException;

class PacoteEntrega{
    public function __construct(
        public string $codigo,
        public string $destino,
        private string $status = "aguardando",
        private int $tentativas = 0,
    )
    {}

    public function sairParaEntrega(): bool{
        if($this->tentativas < 3 && $this->status == "aguardando"){
            $this->tentativas += 1;
            $this->status = "emRota";
            return True;
        }else{
            echo "O pedido não pode sair para entrega" . PHP_EOL;
            return False;
        }
    }

    public function registrarFalha(): bool{
        if($this->status == "emRota"){
            if($this->tentativas < 3){
                $this->status = "aguardando";
                return True;
            }else{
                $this->status = "devolução";
                return True;
            }
        }else{
            echo "O pedido não estava em rota" . PHP_EOL;
            return False;
        }
    }

    public function confirmarEntrega(): bool{
        if($this->status == "emRota"){
            $this->status = "entregue";
            return True;
        }else{
            echo "O pedido não estava em rota" . PHP_EOL;
            return False;
        }
    }

    public function statusAtual(): string{
        return "Seu pacote esta com status em " . $this->status . " e foram feitas " . $this->tentativas . " tentativas" . PHP_EOL;
    }
}

?>