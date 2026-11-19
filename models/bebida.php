<?php
 
namespace API\Models;
 
use Exception;
 
class Bebida {
    private int $idBebida;
    private string $nomeBebida;
    private int $volume;
    private bool $alcoolico = false;
    private float $preco;
    private string $tabela = "bebidas";
 
    public function __construct(
        int $id,
        string $nome,
        int $volume,
        bool $alcoolico,
        float $preco
       
    ) {
        $this->idBebida = $id;
        //$this->setIdBebida($id);
 
        //$this->nomeBebida = $nome;
        $this->setnomeBebida($nome);
       
        //$this->volume = $volume;
        $this->setVolume($volume);
 
        //$this->alcoolico = $alcoolico;
        $this->setAlcoolico($alcoolico);
 
        //$this->preco = $preco;
        $this->setPreco($preco);
    }

    //GETTERS
    public function getnomeBebida(): string {
        return $this->nomeBebida;
    }
    public function getVolume(): int {
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
 
 
 
 
//SETTERS
public function setIdBebida(int $idBebida): void {
        $this->idBebida = $idBebida;
    }
 
    public function setNomeBebida(string $nomeBebida): void {
        //Não pode ser vazia, então vamos validar antes de atribuir o valor à propriedade.
        //Ao menos 3 caractere deve ser fornecido para o nome da bebida.
        if ($nomeBebida == ""){
            throw new Exception("O nome da bebida não pode ser vazio. Por favor, forneça um nome válido.");
        } else if (strlen($nomeBebida) < 3) {
            throw new Exception("O nome da bebida deve ter pelo menos 3 caracteres. Por favor, forneça um nome mais longo.");
        }
        $this->nomeBebida = $nomeBebida;
    }
 
    public function setVolume(int $pVolume): void
    {
        //O volume da bebida deve ser maior que 200 "100"
        if ($pVolume <= 200) {
            throw new Exception("O Volume da bebida precisa ser maior que 200 ml");
        }
        $this->volume = $pVolume;
    }
 
    public function setAlcoolico(bool $pAlcoolico): void
    {
        //O valor de alcoolico deve ser TRUE ou FALSE
        //if ($pAlcoolico == true || $pAlcoolico != false) {
            //throw new Exception("O atributo alcoolico aceita apenas TRUE | FALSE");
        //}
        $this->alcoolico = $pAlcoolico;
    }
 
    public function setPreco(float $preco): void {
        //Não pode ser negativo, nem zero, então vamos validar antes de atribuir o valor à propriedade.
        //O valor de preço deve ser maior do que zero
        if ($preco <= 0) {
            throw new Exception("O valor de preço deve ser maior que zero. Por favor, forneça um valor válido.");
        }
        $this->preco = $preco;
    }
 
 
}