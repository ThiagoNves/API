<?php

require __DIR__ . "config/Database.php";
use API\Config\Database;

$meuBancoDeDados = new Database();
$meuBancoDeDados->conectar();