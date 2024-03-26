<?php
    // FLOATS E BOOLEANOS

    //Números Decimais (Floats)

    $altura = 1.75;
    $peso = 75.4;

    echo "Altura: $altura metros - Peso $peso quilogramas <br";
    
    //Operações com Floats
    $preco_produto = 19.99;
    $quantidade = 3;

    $total = $preco_produto * $quantidade;
    echo "Total da compra de quandade itens do produto que custo $preco_produto:$total reais. <br>";

    //Booleans 
    $item_idade = true;
    $tem_cartao = false;

    $pode_entrar = $item_idade && $tem_cartao; // Operador logico AND
    echo "pode entrar na festa:" . ($pode_entrar ? "Sim <br>" : "Não <br>");

    #   

    $tem_passaporte = true;
    $tem_visto = false;

    $pode_viajar = $tem_passaporte || $tem_visto; //Operador lógico OR
    echo "Pode viajar para o exterior: " . ($pode_viajar ? "Sim <br>" : "Não <br>");

    #

    $sem_carteira_motorista = true;

    $pode_dirigir = !$sem_carteira_motorista;
    echo "Pode dirigir: " . ($pode_dirigir ? "Sim <br>" : "Não <br>");

    #

    $eh_maior = 5 > 7; // Atribuição lógica por comparação
    echo "5 é maior do que 7? :" . ($eh_maior? "Sim <br>" : "Não <br>");


    //demonstrativos para saída if
    $eh_maior = 7 > 5;
    if($eh_maior){
        echo "Resultado pela variável <br>";
    }

    if (7 > 5){
        echo "Resulado pela variável <br>";
    }

    if (true) {
        echo "Resultado HARD CODED";
    }

?>