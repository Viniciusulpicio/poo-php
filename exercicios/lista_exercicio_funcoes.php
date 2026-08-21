<?php

//ex1
$nome = readLine("Digite seu nome: ");
function saudar($nome){
    echo "Olá $nome! Seja bem vindo(a)\n";
}
saudar($nome);

//ex2
$numero = readLine("Digite um numero: ");
function dobrar($numero){
    $dobro = $numero*2;
    echo "O dobro do seu número é $dobro\n";
}
dobrar($numero);


//ex3
$n1 = readLine("Digite um numero: ");
$n2 = readLine("Digite um numero: ");
$n3 = readLine("Digite um numero: ");
function somar($n1, $n2, $n3){
    $soma =  $n1 + $n2 + $n3;
    echo "A soma dos seus numeros é $soma!\n";
}
somar($n1, $n2, $n3);

//ex4
$texto = readLine("Digite seu texto: ");
function mensagem($texto = "Sem mensagem"){
    if ($texto == ""){
        echo "Sem mensagem";
    } else{
        echo $texto;
    }
}
mensagem($texto . "\n");

//ex5
$n = readLine("Digite um numero: ");
function quadrado($n){
    return $n**2;
}
function mostrarQuadrado($n){
    echo "O quadrado do seu numero é " . quadrado($n) . "\n";
}
mostrarQuadrado($n);

//ex6
$frutas = ["laranja", "maca", "banana", "uva"];
function contarElementos($frutas){
    echo "O total de itens na lista é: " . count($frutas) . "\n";
}
contarElementos($frutas);

//ex7
$nota = readLine("Digite sua nota: ");
function verificarAprovacao($nota){
    if ($nota >= 7){
        echo "Aprovado \n";
    } elseif ($nota >= 5) {
        echo "Recuperação \n";
    } else{
        echo "Reprovado \n";
    }
}
verificarAprovacao($nota);

//ex8
$numeros = [];
while (true){
    $numeros_separar = readline("Digite um numero ou 'parar' para sair: ");
    if ($numeros_separar == 'parar'){
        break;
    } else{
        $numeros[] = $numeros_separar;
    }
} 

function separarParesEImpares($numeros){
    $pares = [];
    $impares = [];
    for ($i = 0; $i < count($numeros); $i++){
        if ($numeros[$i] % 2 == 0){
            $pares[] = $numeros[$i];
        } else{
            $impares[] = $numeros[$i];
        }
    }
    return [$pares, $impares];
}

[$pares, $impares] = separarParesEImpares($numeros);

echo "Sua lista de numeros pares é: ";
print_r($pares);

echo "Sua lista de numeros impares é: ";
print_r($impares);


// ex9
$nome_aluno = readline("Digite o nome do aluno: ");
$nota1 = (float) readline("Digite a primeira nota: ");
$nota2 = (float) readline("Digite a segunda nota: ");
$nota3 = (float) readline("Digite a terceira nota: ");

function calcularMedia($n1, $n2, $n3) {
    return ($n1 + $n2 + $n3) / 3;
}

function resultadoAluno($nome, $n1, $n2, $n3) {
    $media = calcularMedia($n1, $n2, $n3);
    if ($media >=7){
        $situacao = "Aprovado";
    } else if ($media <= 4){
        $situacao = "Reprovado";
    }else{
        $situacao = "Recuperação";
    }
    echo "O aluno $nome ficou com média: $media e esta de $situacao" . "\n";
}

resultadoAluno($nome_aluno, $nota1, $nota2, $nota3);


?>