<?php

// Conexão Direta
    $connection = new mysqli("localhost", "usuario_contatos","senha123","contatos");

// Verificando a conexão 
    if(!$connection->connect_errno){
        echo "Sucesso na conexão";
    }

//Verificando a conexão
    if($connection-> connect_errno) {
        echo "Erro de conexão! <br>";
        echo "Echo : " . mysqli_connect_error();
    }


    
?>