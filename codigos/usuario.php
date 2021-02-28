<?php

class Usuario{

public $nome;
public $email;
private $senha;
protected $endereço;
protected $telefone;
public $idade;

//set
public function setNome($nome){
    $this->nome = $nome;
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
public function getNome(){
    $this->nome;
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
    
}

?>