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
    return $this->cliente;
}

public function getData(){
    return $this->data;
}

public function getHora(){
    return $this->hora;
}

public function getMotivo(){
    return $this->motivo;
}

public function getMedico(){
    return $this->medico;
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