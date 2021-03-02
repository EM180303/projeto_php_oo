<?php

class Recpecao{

//atributos
public $consultas;
public $paciente;
public $medico;

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

public function __construct($consultas, $paciente, $medico = null)
{
    $this->paciente = $paciente;
    $this->consultas = $consultas;
    $this->medico = $medico;
    
}

}

?>