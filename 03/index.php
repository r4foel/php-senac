<?php
    //NUMEROS E OPERADORES


    //Operações básicas
    $num1 = 10;
    $num2 = 5;

    //Soma
    $soma = $num1 + $num2;
    echo "Soma: $soma <br>"; 

    //Subtração
    $subtracao = $num1 - $num2;
    echo "Subtração: $subtracao <br>";

    //Multiplicação
    $multiplicacao = $num1 * $num2;
    echo "Multiplicação: $multiplicacao <br>";

    //Divisão
    $divisao = $num1 / $num2;
    echo "Divisão: $divisao <br>";

    //Módulo (Resto da Divisão)
    $modulo = $num1 % $num2;
    echo "Módulo: $modulo <br>";

    //Operações de incremento e decremento
    $num = 5;
    echo "Valor para o incremento e decremento = $num <br>";

    //Incremento 
    //$num = $num + 1;
    $num++;
    echo "Incremento: $num <br>";

    //Decremento
    $num--;
    echo "Decremento: $num <br>";

    //Operadores de Comparação
    $num1 = 10;
    $num2 = 5;

    //Igualdade
    echo "Igual a: ";
    echo $num1 == $num2 ? "Verdadeiro<br>" : "Falso <br>";

    //Diferente
    echo "Diferente de: ";
    echo $num1 != $num2 ? "Verdadeiro<br>" : "Falso<br>";

    //Maior que
    echo "Maior que: ";
    echo $num1 > $num2 ? "Verdadeiro<br>" : "Falso<br>";

    //Menor que
    echo "Menor que: ";
    echo $num1 < $num2 ? "Verdadeiro<br>" : "Falso<br>";


    //Operadores Lógicos
    $estaChovendo = true;
    $estaCalor = true;


    //E lógico (AND)
    echo "Verdadeiro e Verdadeiro: ";
    echo $estaChovendo && $estaCalor ? "Verdadeiro <br>" : "Falso<br>";







?>