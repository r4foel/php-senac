<?php
/*
    

    
*/

    // Exercício 1 - Concatenação de Strings: Crie duas variáveis contendo o nome e a profissão de uma pessoa. Em seguida, concatene as duas variáveis para formar uma frase que descreva a pessoa. Por exemplo, se o nome for "Ana" e a profissão for "engenheira", a frase resultante será "Ana é engenheira".

    $nome = "Rafael";
    $profissao = "Programador";

    echo $nome." é ".$profissao;
    echo "<br>";

    //  Exercício 2 - Comprimento de uma String: Crie uma variável contendo uma senha. Em seguida, verifique se a senha tem pelo menos 8 caracteres de comprimento. Se tiver, exiba uma mensagem indicando que a senha é válida; caso contrário, exiba uma mensagem de erro.

    $senha = "Minhasenha123";
    echo strlen($senha);
    echo "<br>";
 
    if (strlen($senha) > 8) {
    echo "A senha é válida!";
    echo "<br>";
    } else {
    echo "A senha está inválida, digite no mínimo 8 caracteres";
    echo "<br>";
    }

    // Exercício 3 - Substituição de Caracteres:  Crie uma variável contendo uma frase. Substitua todas as ocorrências da palavra "cachorro" por "gato" na frase e exiba o resultado.
    $frase = "O cachorro é o melhor amigo do homem. O homem vê no cachorro um grande parceiro.";

    $novafrase = str_replace("cachorro", "gato", $frase);

    echo $novafrase;
    echo "<br>";

    //Exercício 4 - Conversão de Case: Crie uma variável contendo uma palavra. Converta a palavra para letras minúsculas e depois para letras maiúsculas. Exiba ambas as versões da palavra.
    
    $texto = "AdooOorOoOo!";
    $texto_minusculo = strtolower($texto);
    $texto_maiusculo = strtoupper($texto);

    echo $texto_minusculo;
    echo "<br>";

    echo $texto_maiusculo;
    echo "<br>";

    echo $texto;
    echo "<br>";
  
    //Exercício 5 - Remoção de Espaços em Branco: Crie uma variável contendo uma URL. Remova todos os espaços em branco no início e no final da URL e exiba o resultado.
        // trim(): Remove espaços em branco no início e no final de uma string.
    $texto = " localhost/php-senac/exericios.php ";
    $texto_sem_espacos = trim($texto);
    echo $texto_sem_espacos; 
    echo "<br>";

    //Exercício 6 - Posição da Primeira Ocorrência: Crie uma variável contendo uma lista de compras. Use a função strpos() para encontrar a posição da primeira ocorrência do item "leite" na lista de compras e exiba a posição encontrada.    
    $texto = "Pão Leite Margarina Ovos";
    $posicao = strpos($texto, "Leite");
    echo $posicao;
    echo "<br>";

    //Exercício 7 - Inversão de uma String: Crie uma variável contendo uma palavra. Inverta a palavra e exiba o resultado.
    
?>