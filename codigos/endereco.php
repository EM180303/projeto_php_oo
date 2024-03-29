<?php

class Endereco{

protected $cep;
protected $rua;
protected $bairro;
protected $numero_resi;
protected $complemento;
protected $cidade;
protected $estado;  

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

//get
public function getCep(){
    return $this->cep;
}

public function getRua(){
    return $this->rua;
}

public function getBairro(){
    return $this->bairro;
}

public function getNumero_R(){
    return $this->numero_resi;
}

public function getComplemento(){
    return $this->complemento;
}

public function getCidade(){
    return $this->cidade;
}

public function getEstado(){
    return $this->estado;
}

public function __construct($cep, $rua, $bairro, $cidade, $numero_resi, $estado, $complemento = null)
{
    $this->cep = $cep;
    $this->rua = $rua;
    $this->bairro = $bairro;
    $this->cidade = $cidade;
    $this->numero_resi = $numero_resi;
    $this->complemento = $complemento;
    $this->estado = $estado;
   
}

public function ResumoEndereco(){
    return "CEP: $this->cep <br> Rua: $this->rua <br> Residênsia: $this->numero_resi - $this->complemento <br> Bairro: $this->bairro <br> Cidade: $this->cidade <br> Estado: $this->estado <br>";
}

public function Distancia($estado){
    if($estado != "PE"){
        echo "Aconcelhamos que procure uma das nossas clinicas mais proximas de você!";
    }
}

}

?>