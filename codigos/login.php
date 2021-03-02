<?php

class Login{

public $email;
public $senha;
public $validacao;

//set
public function setEmail($email){
    $this->email = $email;
}

public function setSenha($senha){
    $this->senha = $senha;
}

public function setValidacao($validacao){
    $this->validacao = $validacao;
}

//get
public function getEmail(){
    $this->email;
}

public function getSenha(){
    $this->senha;
}

public function getValidacao(){
    $this->validacao;
}

//construtor
public function __construct($email, $senha, $validacao)
{
    $this->email = $email;
    $this->senha = $senha;
    $this->validacao = $validacao;
}

}

?>