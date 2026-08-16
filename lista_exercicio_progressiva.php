<?php

function ex1() {
    // ex1
    $nome = "vinicius";
    $idade = 18;
    $cidade = "marilia";

    echo "Meu nome é $nome, tenho $idade anos e moro em $cidade!\n";
    print "Meu nome é $nome, tenho $idade anos e moro em $cidade!\n";
}

function ex2() {
    // ex2
    $nome = "vinicius"; 
    $profissao = "entrevistador social";
    $hobby = "jogar";
    print "Meu nome é $nome, sou $profissao e gosto de $hobby\n";
}

function ex3() {
    // ex3
    $num1 = readline("Digite um numero: ");
    $num2 = readline("Digite outro numero: ");

    $soma = $num1+$num2;
    $sub = $num1-$num2;
    $multi = $num1*$num2;
    $div = $num1/$num2;
    $resto = $num1%$num2;

    echo "A soma dos seus numeros é $soma \nSua subtração é $sub \nSua multiplicação é $multi \nSua divisao é $div \nO resto da divisão é $resto\n";
}

function ex4() {
    // ex4
    $idade = readline("Digite sua idade: ");

    if ($idade >= 18){
        echo "maior de idade\n";
    } else {
        echo "menor de idade\n";
    }
}

function ex5() {
    // ex5
    $nota = readline("Digite sua nota (0 a 10) ");

    if ($nota >= 7){
        echo "Aprovado\n";
    } elseif ($nota >= 5 and $nota < 7){
        echo "Recuperacao\n";
    }else{
        echo "Reprovado\n";
    }
}

function ex6() {
    // ex6
    $tabuada = readline("Digite um numero: "); 
    $contador = 1; 

    while ($contador <= 10) { 
        $tabuada_multiplicada = $tabuada * $contador; 
        echo "$tabuada x $contador = $tabuada_multiplicada\n"; 
        $contador++; 
    }
}

function ex7(){
    // ex7
    for ($i = 1; $i <= 50; $i++){
        if ($i%2 == 0){
            echo("$i\n");
        }
    }
}

function ex8(){
    //ex8
    for ($i = 1; $i <= 100; $i++){
        if ($i%2 == 0){
            echo("O numero $i é par\n");
        }else{
            echo("O numero $i é impar\n");
        }
    }
}

function ex9(){
    //ex9
    $frutas = ["maçã", "banana", "uva", "laranja", "carambola"];
    foreach ($frutas as $fruta) {
        echo $fruta . "\n";
    }
}

function ex10(){
    $carros = [
        'Strada' => ['Fiat', '2016'],
        'Polo' => ['Volkswagen', '2026'],
        'HB20' => ['Hyundai', '2025'],
        'Civic' => ['Honda', '1998'],
        'Onix' => ['Chevrolet', '2024'],
    ];

    print_r($carros);
}

function ex11(){
    $alunos = [
        "vinicius" => [6, 9],
        "tomas" => [3, 1],
        "jhuan" => [10, 4],
    ];

    foreach ($alunos as $nome => $notas) {
        $media = array_sum($notas) / 2;
        
        echo ($nome) . ": " . $media . "\n";
    }
}

function ex12(){
    // nao sei fazer
}

function ex13(){
    $n1 = readline("Digite um numero: ");
    $n2 = readline("Digite um numero: ");
    $n3 = readline("Digite um numero: ");

    $media = ($n1 + $n2 + $n3) / 3;
    echo "sua média é: " . $media;
}

function verificarIdade(){
    $idade = readline("Digite sua idade: ");

    if ($idade >= 18){
        echo "Voce é maior de Idade";
    } else{
        echo "Voce é menor de idade";
    }
}

function ex15(){
    $lista = [];

    while (True){
        $entrada = readline("Digite o item da sua lista de compras ou 'sair' para sair: ");
        if ($entrada == 'sair'){
            print_r($lista);
            break;
        } else{
            $lista[] = $entrada;
        }
    }

}

ex1();
ex2();
ex3();
ex4();
ex5();
ex6();
ex7();
ex8();
ex9();
ex10();
ex11();
ex12();
ex13();
verificarIdade();
ex15();
?>