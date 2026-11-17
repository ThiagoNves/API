<?php
 
namespace API\Models;
 
use Exception;
 
class Prato {
    private int $idPrato;
    private string $nomePrato;
    private string $descricao;
    private float $preco;
    private string $tabela = "pratos";
 
    public function __construct(
        int $id,
        string $nome,
        string $descricao,
        float $preco
       
    ) {
        //$this->idPrato = $id;
        $this->setIdPrato($id);

        //$this->nomePrato = $nome;
        $this->setnomePrato($nome);
        
       // $this->descricao = $descricao;
        $this->setDescricao($descricao);

        //$this->preco = $preco;
        $this->setPreco($preco);
    }
 
    public function getnomePrato(): string {
        return $this->nomePrato;
    }
 
     public function getDescricao(): string {
        return $this->descricao;
    }
 
    public function getPreco(): float {
        return $this->preco;
    }
 
    public function getPrecoFormatado(): string {
        return "R$" . number_format($this->preco, 2);
    }
 
    public function getIdPrato(): int {
        return $this->idPrato;
    }
    public function getPratoHTML() : string{
    return "Id: " . $this->getIdPrato() . "<br>
            Nome: " . $this->getnomePrato() . "<br>
            Descrição: " . $this->getDescricao() . "<br>
            Preço: " . $this->getPrecoFormatado() . "<br>";
}


//seters 

public function setIdPrato(int $pId): void {
        
        $this->idPrato = $pId;
    }

 public function setnomePrato(string $pNomePrato): void { if ($pNomePrato == "") {
            throw new Exception("O nome do prato precisa ser preenchido.");
        } else if (strlen($pNomePrato) < 3) {
            throw new Exception("O nome do prato deve ter pelo menos 3 caracteres.");
        }
       
    $this->nomePrato = $pNomePrato;
 
    }
     public function setDescricao(string $pDescricao) : void{
        $this->descricao = $pDescricao;
    }
    

      public function setPreco(float $pPreco) : void{
        if ($pPreco <= 0) {
            throw new Exception("O preço do prato deve ser maior que zero.");
        }
        $this->preco = $pPreco;
    }

    }