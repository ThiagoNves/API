<?php

namespace API\Models;

use Exception;
use Datetime ;
date_default_timezone_set('America/Sao_Paulo');
class Marmita {

private int $idMarmita;

private string $pratoMarmita;

private float $precoMarmita;

private DateTime $ValidadeMarmita;

//Constructor
public function __construct(

int $id,
string $prato,
float $preco,
DateTime $validade

) {
    //$this->idMarmita = $id;
    $this->setIdMarmita($id);

    //$this->pratoMarmita = $prato;
    $this->setPratoMarmita($prato);

    //$this->precoMarmita = $preco;
    $this->setPrecoMarmita($preco);

    //$this->validadeMarmita = $validade;
    $this->setValidadeMarmita($validade);

}

//Getters
   public function getPratoMarmita() : string {
    return $this->pratoMarmita;
   }

   public function getPrecoMarmita() : float {
    return $this->precoMarmita;
   }
   public function getPrecoFormatado() : string {
    return "R$ " . number_format($this->precoMarmita, 2, ',', '.');
   }

    public function getIdMarmita() : int {
     return $this->idMarmita;
    }

    public function getValidadeMarmita() : DateTime {
        return $this->ValidadeMarmita;
    }
    
   public function getMarmitaHTML() : string{
    return  
    "Id: " . $this->getIdMarmita() . "<br>
    Prato: " . $this->getPratoMarmita() . "<br>
    Preço: " . $this->getPrecoFormatado() . "<br>
    Validade: " . $this->getValidadeMarmita()->format('d/m/Y') . "<br>";
   }

   //setters

   public function setIdMarmita(int $idMarmita): void {
        $this->idMarmita = $idMarmita;
    }

   public function setPratoMarmita(string $pratoMarmita): void {
        $this->pratoMarmita = $pratoMarmita;
    }

    public function setPrecoMarmita(float $precoMarmita): void {
        $this->precoMarmita = $precoMarmita;
    }

    public function setValidadeMarmita(DateTime $validadeMarmita): void {
        $this->ValidadeMarmita = $validadeMarmita;
    }


    
}