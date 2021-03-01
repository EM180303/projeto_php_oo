<?php

class Consulta{

protected $data;
protected $hora;
protected $motivo;
protected $medico;
protected $paciente;
    
//set
public function setData($data){
    $this->data = $data;
}

public function setHora($hora){
    $this->hora = $hora;
}

public function setMotivo($motivo){
    $this->motivo = $motivo;
}

public function setMedico($medico){
    $this->medico = $medico;
}

public function setPaciente($paciente){
    $this->paciente = $paciente;
}

//get
public function getPaciente(){
    $this->paciente;
}

public function getData(){
    $this->data;
}

public function getHora(){
    $this->hora;
}

public function getMotivo(){
    $this->motivo;
}

public function getMedico(){
    $this->medico;
}

public function __construct($paciente, $data, $hora, $motivo, $medico)
{
    $this->paciente = $paciente;
    $this->data = $data;
    $this->hora = $hora;
    $this->motivo = $motivo;
    $this->medico = $medico;
}

}

?>