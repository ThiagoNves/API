<?php
 
namespace API\Models;

use Exception;
 
class Bebida {
    private int $idBebida;
    private string $nomeBebida;
    private string $volume;
    private bool $alcoolico = false;
    private float $preco;
    private string $tabela = "bebidas";
 
    public function __construct(
        int $id,
        string $nome,
        string $volume,
        bool $alcoolico,
        float $preco
       
    ) {
        //$this->idBebida = $id;
        $this->setIdBebida($id);

        //$this->nomeBebida = $nome;
        $this->setnomeBebida($nome);
        
       // $this->volume = $volume;
        $this->setVolume($volume);

        //$this->alcoolico = $alcoolico;
        $this->setAlcoolico($alcoolico);

        //$this->preco = $preco;
        $this->setPreco($preco);
    }
 
    public function getnomeBebida(): string {
        return $this->nomeBebida;
    }
    public function getVolume(): string {
        return $this->volume;
    }
    public function getAlcoolico(): bool {
        return $this->alcoolico ? true : false;
    }
     public function getAlcoolicoTexto(): string {
        return $this->alcoolico ? "Sim" : "Não";
    }
        public function getPreco(): float {
        return $this->preco;
    }
 
    public function getPrecoFormatado(): string {
        return "R$" . number_format($this->preco, 2);
    }
    public function getIdBebida(): int {
        return $this->idBebida;
    }
    public function getBebidaHTML() : string{
    return "Id: " . $this->getIdBebida() . "<br>
            Nome: " . $this->getnomeBebida() . "<br>
            Volume: " . $this->getVolume() . "<br>
            Alcoolico: " . $this->getAlcoolicoTexto() . "<br>
            Preço: " . $this->getPrecoFormatado() . "<br>";
}


//seters 


public function setIdBebida(int $pID): void {
    $this->idBebida = $pID;
}

public function setnomeBebida(string $pNomeBebida): void {
    if ($pNomeBebida == ""){
        throw new Exception("O nome da bebida está vazia.");

    } else if (strlen($pNomeBebida) <3){
        throw new Exception("O nome da bebida deve ter pelo menos 3 caracteres.");
    }


    $this->nomeBebida = $pNomeBebida;
}


public function setVolume(string $pVolume): void{
    if ($pVolume == ""){
        throw new Exception("O volume da bebida está vazio.");
    }   else if (strlen($pVolume) < 200){
        throw new Exception("O volume da bebida deve ter pelo menos 200 mililitros.");
    }
    $this->volume = $pVolume;
}

public function setAlcoolico(bool $pAlcoolico): void{
    $this->alcoolico = $pAlcoolico;
} 

  public function setPreco(float $pPreco) : void{
        if ($pPreco <= 0) {
            throw new Exception("O preço da bebida deve ser maior que zero.");
        }
        $this->preco = $pPreco;
    }

} 