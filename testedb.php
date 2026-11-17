<?php

require __DIR__ . "/config/Database.php";
require __DIR__ . "/models/prato.php";
require __DIR__ . "/models/bebida.php";
require __DIR__ . "/models/sobremesa.php";

use API\Config\Database;
use API\Models\Prato;
use API\Models\Bebida;  
use API\Models\Sobremesa;


$meuBancoDeDados = new Database(); //criando objeto database
$minhaConexao = $meuBancoDeDados->conectar(); //chamando o metodo 'conectar' do objeto database



if (is_string($minhaConexao)){
    echo $minhaConexao;
}else{
    //echo "Conectou!"
}

$meuPrato = new Prato(1, "Feijoada", "Deliciosa Feijoada", 50.99);

$minhaBebida = new Bebida(1, "Cerveja", "330ml", true, 10.99);

$minhaSobremesa = new Sobremesa(1, "Sorvete de Negresco", "Um doce frio e saboroso em dias de extremo calor, sabor chocolate com pedaços de negresgo ", 15.99);
//var_dump($meuPrato);


echo $meuPrato->getPratoHTML();
echo "<br>";
echo $minhaBebida->getBebidaHTML();
echo "<br>";
echo $minhaSobremesa->getSobremesaHTML();
 
echo "<br>";

try {
    echo "====Segundo Prato==== <br>";

    $meuSegundoPrato = new Prato(2, "lasanha", "Deliciosa lasanha", 40.99);
    echo $meuSegundoPrato->getPratoHTML();
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}