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
    
}




//ex1();
//ex2();
//ex3();
//ex4();
//ex5();
//ex6();
//ex7();
//ex8();
ex9();
ex10();
?>