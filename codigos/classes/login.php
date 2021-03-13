<?php

require "menssagem.php";

class Login extends Menssagem{

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
    return $this->email;
}

public function getSenha(){
    return $this->senha;
}

public function getValidacao(){
    return $this->validacao;
}

//construtor
public function __construct($email, $senha, $validacao)
{
    $this->email = $email;
    $this->senha = $senha;
    $this->validacao = $validacao;
}
/*Função para o bd
public function LoginOk($email, $senha){
    if(($email == email do bd) and ($senha == senha do bd)){
        $this->validacao = true;
    }
}
*/
public function Exibir(){
    return "Email: $this->email <br> Senha: $this->senha";
}

function mostrarM($parametro){
if($parametro){
    return "Login aprovado";
}else{
    return "Falha"; 
}
}

}

$objlogin = new Login("edu@gmail.com", "1803", true);
echo $objlogin->Exibir();
echo "<br>";
echo $objlogin->mostrarM($objlogin->getValidacao());

?>