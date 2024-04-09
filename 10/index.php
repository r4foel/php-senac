<?php

class Carro {
    // Propriedades
    public $marca;
    public $modelo;
    public $ano;
    
    // Metodo construtor
    public function __construct($marca, $modelo, $ano)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }  

    // Função / Comportamento / Método
    public function ligar(){
        echo "O carro esta ligado. <br>";
    }
}

$meuCarro = new Carro("Toyota", "Corolla", 2022);
echo "$meuCarro->marca, $meuCarro->modelo, $meuCarro->ano";
echo "<br>";
$meuCarro->ligar();




?>