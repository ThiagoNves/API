<?php

namespace API\Config;

use PDO;

class Database {

private string $host = "localhost";

private string $database = "cardapio";

private string $user = "root";

private string $pwd = "usbw";

private string $port = "3311";

private  PDO | null $conexao;

public function conectar(){
$this->conexao = null;

 $dsn = 'mysql:host=' . $this->host . ';port=' . $this->port . ';dbname=' . 
    $this->database . ';charset=utf8';

try {
  $this->conexao = new PDO ($dsn,$this->user,$this->pwd);
  $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Conectou!!";
} catch (\Exception $e) {
    echo "ERRO" . $e->getMessage();
} 

}


}
?>