<?php

require "endereco.php" ;

class Usuario{

public $nome_completo;
public $email;
private $senha;
protected $endereço;
protected $telefone;
public $idade;

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

//get
public function getNome_c(){
    $this->nome_completo;
}

public function getEmail(){
    $this->email;
}

private function getSenha(){
    $this->senha;
}

public function getEndereco(){
    $this->endereco;
}

public function getTelefone(){
    $this->telefone;
}

public function getIdade(){
    $this->idade;
}

public function __construct($nome_completo, $email, $senha, $idade, $telefone = null){

$this->nome = $nome_completo;
$this->email = $email;
$this->senha = $senha;
$this->idade = $idade;
$this->telefone = $telefone;

}
    
}

?>