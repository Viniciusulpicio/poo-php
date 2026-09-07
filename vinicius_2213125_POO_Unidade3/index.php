<?php
//  Vinicius Lima Sulpicio - 2213125 - BCC-B -  Programação Orientada a Objetos-->

// PHP_EOL  --> End of Line --> Pula para a proxima linha
echo "start..." . PHP_EOL ;

require_once __DIR__ . '/vendor/autoload.php';

use App\Retangulo;
use App\ContaBancaria;
use App\Aluno;
use App\ProdutoEstoque;
use App\TermostatoInteligente;
use App\PersonagemRPG;
use App\PetVirtual;
use App\CarteiraDigital;
use App\ConfiguracaoJogo;
use App\DroneEntrega;

// usando funções para conseguir comentar e limpar os logs
main();
function main(){
    exercicio1();
    exercicio2();
    exercicio3();
    exercicio4();
    exercicio5();
    exercicio6();
    exercicio7();
    exercicio8();
    exercicio9();
    exercicio10();
}

function exercicio1(){
// exercicio 1 - retangulo
$retangulo = new Retangulo(10, 5);
$retangulo2 = new Retangulo(6, 3);
$retangulo3 = new Retangulo(20, 7);

echo "a área do retangulo é: " . $retangulo->area() . PHP_EOL;
echo "o perimetro do retangulo é: " . $retangulo->perimetro() . PHP_EOL;

echo "a área do retangulo é: " . $retangulo2->area() . PHP_EOL;
echo "o perimetro do retangulo é: " . $retangulo2->perimetro() . PHP_EOL;

echo "a área do retangulo é: " . $retangulo3->area() . PHP_EOL;
echo "o perimetro do retangulo é: " . $retangulo3->perimetro() . PHP_EOL;

if ($retangulo->ehQuadrado()){
    echo "Eh quadrado" . PHP_EOL;
} else{
    echo "Nao é quadrado" . PHP_EOL;

}

if ($retangulo2->ehQuadrado()){
    echo "Eh quadrado" . PHP_EOL;
} else{
    echo "Nao é quadrado" . PHP_EOL;

}

if ($retangulo3->ehQuadrado()){
    echo "Eh quadrado" . PHP_EOL;
} else{
    echo "Nao é quadrado" . PHP_EOL;

}

// aqui tem que usar try/catch invez de if/else pois o throw interrompe o fluxo do programa 

try {
    $retangulo->redimensionar(-5, 10);
    echo "Dimensão válida" . PHP_EOL;
} catch (InvalidArgumentException $e) {
    echo "Dimensão inválida" . PHP_EOL;
}


try {
    $retangulo->redimensionar(9, 10);
    echo "Dimensão válida" . PHP_EOL;
} catch (InvalidArgumentException $e) {
    echo "Dimensão inválida" . PHP_EOL;
}

}

function exercicio2(){
    $conta = new ContaBancaria("Josefino", 731.00);
    $conta2 = new ContaBancaria("Tomas", 11.00);

    $conta->depositar(69.00);
    echo $conta->resumo();

    $conta->sacar(800);
    echo $conta->resumo();
    

    $conta2->depositar(-10);
    echo $conta2->resumo();

    $conta2->sacar(12);
    echo $conta2->resumo();

}

function exercicio3(){
    $aluno1 = new Aluno("Tomas", 2213146);
    $aluno2 = new Aluno("Jhuan", 2213194);
    $aluno3 = new Aluno("lucas", 2213126);

    $aluno1->adicionarNota(10);
    $aluno1->adicionarNota(7);

    $aluno2->adicionarNota(5);
    $aluno2->adicionarNota(6);

    $aluno3->adicionarNota(0);
    $aluno3->adicionarNota(3);

    $aluno1->calcularMedia();
    $aluno2->calcularMedia();
    $aluno3->calcularMedia();

    $aluno1->situacao();
    $aluno2->situacao();
    $aluno3->situacao();

    echo $aluno1->resumo();
    echo $aluno2->resumo();
    echo $aluno3->resumo();

    $aluno4 = new Aluno("Joao", 2213147);
    $aluno4->adicionarNota(11);
    $aluno4->adicionarNota(-4);
}

function exercicio4(){
    $produto1 = new ProdutoEstoque("banana", 18, 30);
    $produto2 = new ProdutoEstoque("maca", 9, 13);
    $produto3 = new ProdutoEstoque("laranja", 12, 60);

    $produto1->aplicarDesconto(30);
    $produto1->repor(15);
    $produto1->reservar(5);

    $produto2->aplicarDesconto(50);
    $produto2->repor(7);
    $produto2->reservar(20);

    echo $produto1->resumo();
    echo $produto2->resumo();

    $produto3->aplicarDesconto(51);
    echo $produto3->resumo();
}

function exercicio5(){
    $temperatura = new TermostatoInteligente(14, 20, false);

    echo $temperatura->acaoNecessaria();

    $temperatura->ligar();
    echo $temperatura->acaoNecessaria();

    $temperatura->atualizarTemperaturaAtual(21);
    echo $temperatura->acaoNecessaria();

    $temperatura->atualizarTemperaturaAtual(19);
    echo $temperatura->acaoNecessaria();

    $temperatura->atualizarTemperaturaAtual(20);
    echo $temperatura->acaoNecessaria();

    $temperatura->definirTemperaturaAlvo(45);
}

function exercicio6(){
    $guerreiro = new PersonagemRPG("Guerreiro", 120);
    $arqueiro = new PersonagemRPG("Arqueiro", 80);

    echo $guerreiro->status();
    echo $arqueiro->status();

    $dano = $guerreiro->executarAtaque(30, 40);
    $arqueiro->sofrerDano($dano);
    echo $arqueiro->status();

    $arqueiro->curar(15);
    echo $arqueiro->status();

    $guerreiro->descansar();
    echo $guerreiro->status();

    $guerreiro->executarAtaque(80, 50);
    $guerreiro->executarAtaque(40, 50); 

    $arqueiro->curar(100); 
    echo $arqueiro->status(); 

    $arqueiro->sofrerDano(100); 
    echo $arqueiro->status();

    $arqueiro->executarAtaque(10, 20);

    $arqueiro->curar(30);

    $arqueiro->descansar();
}

function exercicio7(){
    $pet = new PetVirtual("Bob");
    echo $pet->status();

    $pet->brincar();
    echo $pet->status();

    $pet->alimentar();
    echo $pet->status();

    $pet->brincar();
    echo $pet->status();

    $pet->dormir();
    echo $pet->status();

    $pet->alimentar();
    echo $pet->status();

    $pet->brincar();
    echo $pet->status();

    $pet->alimentar();
    $pet->alimentar();
    $pet->alimentar();
    $pet->alimentar();

    $pet->dormir();
    $pet->dormir();
    $pet->dormir();
    echo $pet->status();

    $pet->brincar();
    $pet->brincar();
    $pet->brincar();
    $pet->brincar();
    $pet->brincar();
    echo $pet->status(); 
}

function exercicio8(){
    $carteira = new CarteiraDigital("Vinicius", 500.0, 300.0);
    echo $carteira->resumo();

    $carteira->receber(200.0);
    echo $carteira->resumo();

    $carteira->pagarPix(150.0);
    echo $carteira->resumo();

    $carteira->pagarPix(200.0);
    echo $carteira->resumo();

    $carteira->pagarPix(1000.0);
    echo $carteira->resumo();

    $carteira->iniciarNovoDia();
    echo $carteira->resumo();

    $carteira->pagarPix(250.0);
    echo $carteira->resumo();
}

function exercicio9(){
    $original = new ConfiguracaoJogo(70, "normal", false);
    echo $original->resumo();

    $atalho = $original;
    $atalho->alterarVolume(90);
    $atalho->alterarDificuldade("dificil");
    $atalho->alternarTelaCheia();

    echo $atalho->resumo();
    echo $original->resumo();

    // $original === $atalho e true: ambas as variaveis referenciam o mesmo objeto em memoria (mesma identidade)
    if ($original === $atalho){
        echo "original e atalho sao o mesmo objeto na memoria" . PHP_EOL;
    } else{
        echo "original e atalho sao objetos diferentes" . PHP_EOL;
    }

    $copia = clone $original;
    $copia->alterarVolume(20);
    $copia->alterarDificuldade("facil");

    echo $copia->resumo();
    echo $original->resumo();

    // $original === $copia e false: sao instancias diferentes na memoria, mesmo que tivessem valores iguais (identidades distintas)
    if ($original === $copia){
        echo "original e copia sao o mesmo objeto na memoria" . PHP_EOL;
    } else{
        echo "original e copia sao objetos diferentes na memoria" . PHP_EOL;
    }
}

function exercicio10(){
    // exercicio 10 - drone de entrega
    $drone = new DroneEntrega("1", 40);
    $drone2 = new DroneEntrega("2", 1000);

    // 1. Ciclo completo: carregar pacote, decolar e finalizar entrega
    $drone->carregarPacote(14);
    echo $drone->status();

    $drone->carregarPacote(6);
    echo $drone->status();

    $drone->decolar(7);
    echo $drone->status();

    $drone->finalizarEntrega();
    echo $drone->status();

    // 2. Teste: carga acima da capacidade máxima (40kg)
    $drone->carregarPacote(41);

    // 3. Teste: decolagem sem pacote (carga continua 0kg)
    $drone->decolar(5);

    // 4. Teste: entrega cuja distância exige mais bateria do que o disponível
    $drone->carregarPacote(39);
    $drone->decolar(100);
    echo $drone->status();

    // 5. Recarregar o drone e demonstrar que volta a operar
    $drone->recarregar();
    echo $drone->status();
    $drone->decolar(10);
    echo $drone->status();
    $drone->finalizarEntrega();

    // 6. Segunda instância com capacidade diferente comprovando estados distintos
    $drone2->carregarPacote(50);
    echo $drone2->status();

    $drone2->decolar(20);
    echo $drone2->status();

    $drone2->finalizarEntrega();
    echo $drone2->status();
}
?>