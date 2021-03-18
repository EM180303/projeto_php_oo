<?php
require "usuario.php";
require "usuariointer.php";

class Recpecao extends Usuario implements UsuarioInter{

//atributos
public $consultas;
public $paciente;
public $medico; 
public $pergunta;
public $telefone;
public $pergunta2;
public $telefoneM;
public $veri;

//set
public function setConsultas($consultas){
    $this->consultas = $consultas;
   
}

public function setPaciente($paciente){
    $this->paciente = $paciente;
}

public function setMedico($medico){
    $this->medico = $medico;
}

public function setPergunta($pergunta){
    $this->pergunta = $pergunta;
}

public function setTelefone($telefone){
    $this->telefone = $telefone;
}

public function setPergunta2($pergunta2){
    $this->pergunta2 = $pergunta2;
}

public function setTelefoneM($telefoneM){
    $this->telefoneM = $telefoneM;
}

public function setVeri($veri){
    $this->veri = $veri;
}

//get
public function getMonsultas(){
    return $this->consultas;
   
}

public function getPaciente(){
    return $this->paciente;
}

public function getMedico(){
    return $this->medico;
}

public function getPergunta(){
    return $this->pergunta;
}

public function getTelefone(){
    return $this->telefone;
}

public function getPergunta2(){
    return $this->pergunta2;
}

public function getTelefoneM(){
    return $this->telefoneM;
}

public function getVeri(){
    return $this->veri;
 }

public function __construct($paciente, $medico, $pergunta, $pergunta2, $telefoneM, $telefone = null)
{
    $this->paciente = $paciente;
    $this->medico = $medico; 
    $this->telefone = $telefone;
    $this->pergunta = $pergunta;
    $this->telefoneM = $telefoneM;
    $this->pergunta2 = $pergunta2;
}

public function PacienteNoLocal($pergunta){
    echo "<br>";
    echo"O paciente $this->paciente já chegou? ";
    if($pergunta == "sim"){
        echo"$pergunta"; 
    }else{
        echo"$pergunta";
        echo"<br> Ligue para ele: $this->telefone";
    }
}

public function medicoNoLocal($pergunta2){ 
    echo "<br>";
    echo"O medico $this->medico já chegou? ";
    if($pergunta2 == "sim"){
        echo"$pergunta2";
    }else{
        echo"$pergunta2";
        echo"<br> Ligue para ele: $this->telefoneM";
    }
}

public function Exibdirtipo($tipo){
    if($tipo == "Recepção"){
        echo "<h1> Recepção </h1>";
    }
}

public function Confirme($veri)
{
    if($veri){
        echo"Dados da consulta ok";
    }else{
        echo"Erro nos dados";
    }
}

}

$objusario = new Usuario("Cremildo", "recepcao1@gmail.com", "2222", "11/01/2000", "sim", "Recepção");
$objendereco = new Endereco("54450-010", "Avenida Brasil", "Boa Vista", "Recife", 2047, "PE", "Brasil", "Ap 5");
$objrecepcao = new Recpecao("Eduardo", "Dr. Dráuzio", "sim", "não", 81987027519);
$objusario->setEndereco($objendereco->ResumoEndereco());
$objrecepcao->Exibdirtipo($objusario->getTipo());
echo $objusario->Exibir();
$objusario->Confirme($objusario->getVeri());
echo $objusario->Validado($objusario->getConf());
$objusario->setEndereco($objendereco->Distancia($objendereco->getUf(), $objendereco->getEstado()));
echo "<hr>";
$objrecepcao->medicoNoLocal($objrecepcao->getPergunta2());
$objrecepcao->PacienteNoLocal($objrecepcao->getPergunta());
echo"<br>";
$objrecepcao->setVeri(true);
$objrecepcao->Confirme($objrecepcao->getVeri());
echo"<br>";

?>