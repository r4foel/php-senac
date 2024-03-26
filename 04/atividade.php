<?php
/*  FLOATS E BOOLEANOS

    Exercício 1 - Índice de Massa Corporal (IMC):
    Solicite ao usuário que insira sua altura (em metros) e peso (em quilogramas). Calcule o IMC usando a fórmula IMC = peso / (altura * altura). Exiba o resultado e informe se o usuário está abaixo do peso, com peso normal, com sobrepeso ou obeso, com base nos intervalos de IMC padrão. */

    $peso = 81 ;
    $altura = 1.77 ;

    $calculo_IMC = $peso / ($altura * $altura);
    
    if ($calculo_IMC < 18.5){
        echo "Abaixo do peso <br>";
    } else if($calculo_IMC >= 18.5 && $calculo_IMC <= 24.9){
        echo "Peso normal <br>";
    } else if($calculo_IMC >= 25 && $calculo_IMC <= 29.9) {
        echo "Sobrepeso <br>";
    } else if($calculo_IMC >= 30){
        echo "Obesidade <br>";
    }



  /*Exercício 2 - Verificação de Pagamento:
    Pergunte ao usuário se ele tem saldo na conta (booleano). Se tiver, pergunte se ele deseja fazer uma compra. Se a resposta for afirmativa, peça ao usuário para inserir o valor da compra (float). Verifique se o valor da compra é menor ou igual ao saldo disponível e informe se a transação foi concluída com sucesso ou se o saldo é insuficiente. */

    $saldo = 150;

    $iniciar_compra = true ? "Sim" : "Não";

    $valor_compra = 160;

    echo "Extrato conta: " . ($saldo > 0 ? "Saldo disponivel" : "Saldo indisponivel") . "<br> Deseja realizar uma compra: $iniciar_compra <br> Valor da compra: $valor_compra <br> Transação: " .  ($valor_compra >= $saldo ? "Compra concluída com sucesso" : "Saldo insuficiente");



    /*Exercício 3 - Conversor de Temperatura:
    Solicite ao usuário que insira uma temperatura em Celsius (float). Converta essa temperatura para Fahrenheit usando a fórmula: Fahrenheit = (Celsius * 9/5) + 32. Exiba o resultado da conversão.*/

    $temp_celsius = 24.0;
    $calculo_temperatura = ($temp_celsius * 9/5) + 32;
    echo $calculo_temperatura;

    /*Exercício 4 - Verificação de Acesso:
    Pergunte ao usuário se ele é maior de idade (booleano). Se ele for maior de idade, pergunte se ele possui autorização dos pais (booleano). Com base nas respostas, determine se o usuário tem acesso ao conteúdo restrito.*/
    
    $maior_idade = false;
    $autorizacao_pais = true;
    
    if($maior_idade || $autorizacao_pais) {
        echo "Acesso concedido ao conteúdo restrito. <br>";
    } else {
        echo "Acesso negado ao conteúdo restrito. <br>";
    }   


    /*Exercício 5 - Verificação de Números Primos:
    Peça ao usuário que insira um número inteiro (int) e verifique se ele é um número primo. Use um booleano para indicar se o número é primo ou não.
    */

    

?>