<?php

namespace API\Models;

use Exception;

class sobremesa {

private int $idSobremesa;

private string $nomeSobremesa;

private string $descricao;

private float $preco;


private string $tabela = "sobremesas";

//Constructor
public function __construct(

int $id,
string $nome,
string $descricao,
float $preco

) {
    //$this->idSobremesa = $id;
    $this->setIdSobremesa($id);

    //$this->nomeSobremesa = $nome;
    $this->setNomeSobremesa($nome);

    //$this->descricao = $descricao;
    $this->setDescricao($descricao);

    //$this->preco = $preco;
    $this->setPreco($preco);

}

//Getters
   public function getNomeSobremesa() : string {
    return $this->nomeSobremesa;
   }

   public function getDescricao() : string {
    return $this->descricao;
   }
   public function getPrecoFormatado() : string {
    return "R$ " . number_format($this->preco, 2, ',', '.');
   }

    public function getIdSobremesa() : int {
     return $this->idSobremesa;
    }
    
   public function getSobremesaHTML() : string{
    return  
    "Id: " . $this->getIdSobremesa() . "<br>
    Nome da Sobremesa: " . $this->getNomeSobremesa() . "<br>
    Descrição: " . $this->getDescricao() . "<br>
    Preço: " . $this->getPrecoFormatado() . "<br>";
   }

   //setters

   public function setIdSobremesa(int $idSobremesa): void {
        $this->idSobremesa = $idSobremesa;
    }

   public function setNomeSobremesa(string $nomeSobremesa): void {
        //O nome não pode ser vazio e deve possuir ao menos 3 caracteres
        if (trim($nomeSobremesa) == "") {
        throw new Exception("O nome da sobremesa não pode ser vazio.");
        } else if (strlen($nomeSobremesa) < 3) {
        throw new Exception("O nome da sobremesa deve ter ao menos 3 caracteres.");
        }
        $this->nomeSobremesa = $nomeSobremesa;
    }


 public function setDescricao(string $descricao): void {
        $this->descricao = $descricao;
    }


    
    public function setPreco(float $preco): void {
        //Impede que o usuário insira um texto como parâmetro do preço
        if (!is_numeric($preco)) {
            throw new Exception("O preço deve ser um valor numérico válido. Textos não são permitidos.");
        }
        if ($preco <= 0) {
            throw new Exception("O preço precisa ser um valor maior que zero.");
        }
        $this->preco = $preco;
   }
}