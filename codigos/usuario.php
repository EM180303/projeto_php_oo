<?php

require "endereco.php" ;

class Usuario{

public $nome_completo;
public $email;
private $senha;
protected $endereco;
protected $telefone;
public $idade;
public $veri;
public $conf;

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

public function setIdade($idade){
    $this->idade = $idade;
}

public function setVeri($veri){
    $this->veri = $veri;
}

public function setConf($conf){
    $this->conf = $conf;
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

public function getIdade(){
    return $this->idade;
}

public function getVeri(){
    return $this->veri;
}

public function getConf(){
    return $this->conf;
}

//construtor
public function __construct($nome_completo, $email, $senha, $idade, $veri, $telefone = null){

$this->nome_completo = $nome_completo;
$this->email = $email;
$this->senha = $senha;
$this->idade = $idade;
$this->telefone = $telefone;
$this->veri = $veri;

}

public function Exibir(){
    return "Nome: $this->nome_completo <br> Email: $this->email <br> Senha: $this->senha <br> Idade: $this->idade <br> Telefone: $this->telefone <br> - Endereço - <br> ". $this->endereco;
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
    return "Dados validados";
}else{
    return "Corrija seus dados";
}
}
    
}

$objusario = new Usuario("Edu", "edu@gmail.com", "1803", 17, "sim", 81985624197);
$objendereco = new Endereco("54240-030", "Rua 04", "Curado I", "Jaboatão", 75, "PE", "Brasil", "C");
$objusario->setEndereco($objendereco->ResumoEndereco());
echo $objusario->Exibir();
$objusario->Confirme($objusario->getVeri());
echo $objusario->Validado($objusario->getConf());
?>