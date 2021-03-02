<?php

class Endereco{

protected $cep;
protected $rua;
protected $bairro;
protected $numero_resi;
protected $complemento;
protected $cidade;
protected $estado;  
protected $uf;

//set
public function setCep($cep){
    $this->cep = $cep;
}

public function setRua($rua){
    $this->rua = $rua;
}

public function setBairro($bairro){
    $this->bairro = $bairro;
}

public function setNumero_R($numero_resi){
    $this->numero_resi = $numero_resi;
}

public function setComplemento($complemento){
    $this->complemento = $complemento;
}

public function setCidade($cidade){
    $this->cidade = $cidade;
}

public function setEstado($estado){
    $this->estado = $estado;
}

public function setUf($uf){
    $this->uf = $uf;
}

//get
public function getCep(){
    $this->cep;
}

public function getRua(){
    $this->rua;
}

public function getBairro(){
    $this->bairro;
}

public function getNumero_R(){
    $this->numero_resi;
}

public function getComplemento(){
    $this->complemento;
}

public function getCidade(){
    $this->cidade;
}

public function getEstado(){
    $this->estado;
}

public function getUf(){
    $this->uf;
}

public function __construct($cep, $rua, $bairro, $cidade, $numero_resi, $estado, $uf,  $complemento = null)
{
    $this->cep = $cep;
    $this->rua = $rua;
    $this->bairro = $bairro;
    $this->cidade = $cidade;
    $this->numero_resi = $numero_resi;
    $this->complemento = $complemento;
    $this->estado = $estado;
    $this->uf = $uf;
}

public function ResumoEndereco(){
    return "CEP: $this->cep <br> Rua: $this->rua <br> Residênsia: $this->numero_resi - $this->complemento <br> Bairro: $this->bairro <br> Cidade: $this->cidade <br> Estado: $this->estado <br> País: $this->uf <br>";
}

}

?>