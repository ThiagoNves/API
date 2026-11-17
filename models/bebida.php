<?php
 
namespace API\Models;
 
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
        $this->idBebida = $id;
        $this->nomeBebida = $nome;
        $this->volume = $volume;
        $this->alcoolico = $alcoolico;
        $this->preco = $preco;
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
}
 