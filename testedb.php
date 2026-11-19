<?php

require __DIR__ . "/config/Database.php";
require __DIR__ . "/models/prato.php";
require __DIR__ . "/models/bebida.php";
require __DIR__ . "/models/sobremesa.php";
require __DIR__ . "/models/marmita.php";

use API\Config\Database;
use API\Models\Prato;
use API\Models\Bebida;  
use API\Models\Sobremesa;
use API\Models\Marmita;

$meuBancoDeDados = new Database(); //criando objeto database
$minhaConexao = $meuBancoDeDados->conectar(); //chamando o metodo 'conectar' do objeto database



if (is_string($minhaConexao)){
    echo $minhaConexao;
}else{
    //echo "Conectou!"
}

// $meuPrato = new Prato(1, "Feijoada", "Deliciosa Feijoada", 50.99);

// $minhaBebida = new Bebida(1, "Cerveja", 330, true, 10.99);

// $minhaSobremesa = new Sobremesa(1, "Sorvete de Negresco", "Um doce frio e saboroso em dias de extremo calor, sabor chocolate com pedaços de negresgo ", 15.99);
// //var_dump($meuPrato);


// echo $meuPrato->getPratoHTML();
// echo "<br>";
// echo $minhaBebida->getBebidaHTML();
// echo "<br>";
// echo $minhaSobremesa->getSobremesaHTML();
 
// echo "<br>";

try {
    echo "====Segundo Prato==== <br>";

    $meuSegundoPrato = new Prato(2, "lasanha", "Deliciosa lasanha", 40.99);
    echo $meuSegundoPrato->getPratoHTML();
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}

 echo "<br>";

     try{
         echo "====Segunda Bebida==== <br>";
         $minhaSegundaBebida = new Bebida(2, "Suco de Laranja", 500, false, 5.99);
         echo $minhaSegundaBebida->getBebidaHTML();
     } catch (\Throwable $th) {
        echo "Erro: " . $th->getMessage();
     }

 echo "<br>";
  
 try{
        echo "====Segunda Sobremesa==== <br>";
         $minhaSegundaSobremesa = new Sobremesa(2, "Pudim de Leite", "Um doce cremoso e delicioso, feito com leite condensado e ovos", 12.99);
         echo $minhaSegundaSobremesa->getSobremesaHTML();
   } catch (\Throwable $th) {
       echo "Erro: " . $th->getMessage();
     }

     echo "<br>";

     try{
        echo "====Primeira Marmita==== <br>";
         $minhaPrimeiraMarmita = new Marmita(1, "Feijoada", 25.99, new DateTime('2023-12-31'));
         echo $minhaPrimeiraMarmita->getMarmitaHTML();
     }catch (\Throwable $th) {
        echo "Erro: " . $th->getMessage();
     }