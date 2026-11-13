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
  //echo "Conectou!!";
} catch (\PDOException $e) {
    echo json_encode(["Erro" => "Não foi possível conectar ao banco de dados: " . $e->getMessage()]);
    JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE;
}catch (\Throwable $e) {
    echo json_encode(["Erro" => "Ocorreu um erro genérico: " . $e->getMessage()]);
    JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE;
}

return $this->conexao;

}


}
?>