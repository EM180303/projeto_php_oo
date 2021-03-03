<?php

class Recpecao{

//atributos
public $consultas;
public $paciente;
public $medico;
public $pergunta;
public $telefone;
public $pergunta2;
public $telefoneM;

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

}

$objrecepcao = new Recpecao("Eduardo", "Dr. Dráuzio", "sim", "não", 81987027519);
$objrecepcao->medicoNoLocal($objrecepcao->getPergunta2());
$objrecepcao->PacienteNoLocal($objrecepcao->getPergunta())

?>