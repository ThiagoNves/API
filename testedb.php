<?php

require __DIR__ . "/config/Database.php";
require __DIR__ . "/models/prato.php";


use API\Config\Database;
use API\Models\Prato;


$meuBancoDeDados = new Database(); //criando objeto database
$minhaConexao = $meuBancoDeDados->conectar(); //chamando o metodo 'conectar' do objeto database



if (is_string($minhaConexao)){
    echo $minhaConexao;
}else{
    //echo "Conectou!"
}

$meuPrato = new Prato(1, "Feijoada", "Deliciosa Feijoada", 50.99);

//var_dump($meuPrato);

echo $meuPrato->getPratoHTML();