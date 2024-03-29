<?php

require "endereco.php" ;


class Usuario{

public $id;
public $nome_completo;
public $email;
private $senha;
protected $endereco;
protected $telefone;
public $nascimento;
public $veri;
public $conf;
public $tipo;

//set
public function setNome_c($nome_completo){
    $this->nome_completo = $nome_completo;
}

public function setEmail($email){
    $this->email = $email;
}

private function setSenha($senha){
    $this->senha = $senha;
}

public function setEndereco($endereco){
    $this->endereco = $endereco;
}

public function setTelefone($telefone){
    $this->telefone = $telefone;
}

public function setnascimento($nascimento){
    $this->nascimento = $nascimento;
}

public function setVeri($veri){
    $this->veri = $veri;
}

public function setConf($conf){
    $this->conf = $conf;
}

public function setTipo($tipo){
    $this->tipo = $tipo;
}

//get
public function getNome_completo(){
    return $this->nome_completo;
}

public function getEmail(){
    return $this->email;
}

private function getSenha(){
    return $this->senha;
}

public function getEndereco(){
    return $this->endereco;
}

public function getTelefone(){
    return $this->telefone;
}

public function getnascimento(){
    return $this->nascimento;
}

public function getVeri(){
    return $this->veri;
}

public function getConf(){
    return $this->conf;
}

public function getTipo(){
    return $this->tipo;
}

//construtor
public function __construct($nome_completo, $email, $senha, $nascimento, $veri , $tipo, $telefone=null){

$this->nome_completo = $nome_completo;
$this->email = $email;
$this->senha = $senha; 
$this->nascimento = $nascimento;
$this->telefone = $telefone;
$this->veri = $veri;
$this->tipo = $tipo;

}

public function Exibir(){
    return "Nome: $this->nome_completo <br> Email: $this->email <br> Senha: $this->senha <br> Data de nascimento: $this->nascimento <br> Telefone: $this->telefone <br> - Endereço - <br> ". $this->endereco;
}

public function Confirme($veri){
if($veri == "sim"){
    $this->conf = true;
}else{ 
    $this->conf = false;
}
}

public function Validado($conf){
if($conf == true){
    return "Dados validados <br>";
}else{
    return "Corrija seus dados <br>";
}
}
    
}

?>