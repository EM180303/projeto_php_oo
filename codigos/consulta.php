<?php

class Consulta{

protected $data;
protected $hora;
protected $motivo;
protected $medico;
protected $cliente;
    
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

public function setCliente($cliente){
    $this->cliente = $cliente;
}

//get
public function getCliente(){
    $this->cliente;
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

public function __construct($cliente, $data, $hora, $motivo, $medico)
{
    $this->cliente = $cliente;
    $this->data = $data;
    $this->hora = $hora;
    $this->motivo = $motivo;
    $this->medico = $medico;
}

}

?>