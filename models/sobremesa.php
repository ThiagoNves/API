<?php

namespace API\Models;

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
    $this->idSobremesa = $id;
    $this->nomeSobremesa = $nome;
    $this->descricao = $descricao;
    $this->preco = $preco;

}

//Getters and Setter
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


}
