<?php 
namespace App\ex7; 

use App\ex7\Veiculo; 
use InvalidArgumentException; 

class Estacionamento { 
    public function __construct( 
        private string $nome, 
        private int $vagas, 
        private array $estacionamento = [], 
    ) { 
        if ($this->nome == "" || $this->vagas <= 0) { 
            throw new InvalidArgumentException("Argumentos inválidos"); 
        } 
    } 

    public function adicionarVeiculo(Veiculo $veiculo): bool { 
        if ($this->vagasLivres() <= 0) { 
            echo "Limite de vagas atingido" . PHP_EOL; 
            return false; 
        } 

        foreach ($this->estacionamento as $carrosEstacionados) { 
            if ($carrosEstacionados->getPlaca() == $veiculo->getPlaca()) { 
                echo "Não existem 2 carros com mesma placa" . PHP_EOL; 
                return false; 
            } 
        } 

        $this->estacionamento[] = $veiculo; 
        return true; 
    } 

    public function removerVeiculo(Veiculo $veiculo): bool { 
        foreach ($this->estacionamento as $key => $carrosEstacionados) { 
            if ($carrosEstacionados->getPlaca() == $veiculo->getPlaca()) { 
                unset($this->estacionamento[$key]); 
                return true; 
            } 
        } 
        echo "Veiculo não registrado" . PHP_EOL; 
        return false; 
    } 

    public function vagasLivres(): int { 
        return $this->vagas - count($this->estacionamento); 
    } 

    public function localizarVeiculos(string $placa): bool { 
        foreach ($this->estacionamento as $carrosEstacionados) { 
            if ($carrosEstacionados->getPlaca() == $placa) { 
                echo $carrosEstacionados->getPlaca() . PHP_EOL; 
                return true; 
            } 
        } 
        echo "Veiculo não encontrado no estacionamento" . PHP_EOL; 
        return false; 
    } 

    public function veiculosEstacionados(): string { 
        $retorno = ""; 
        foreach ($this->estacionamento as $carrosEstacionados) { 
            $retorno .= $carrosEstacionados->getCarro() . PHP_EOL; 
        } 
        return $retorno; 
    } 

    public function status(): string { 
        $retorno = "Estacionamento: {$this->nome} | Vagas livres: {$this->vagasLivres()} |" . PHP_EOL . 
                   "Veiculos estacionados : " . PHP_EOL . 
                   $this->veiculosEstacionados(); 
        return $retorno; 
    } 
} 
?>
