<?php

class Cliente{

    public $plano;
    public $numero_consultas;
    public $consulta;

    
//set
public function setPlano($plano){
    $this->plano = $plano;
}

public function setNumero_C($numero_consultas){
    $this->numero_consultas = $numero_consultas;
}

public function setConsulta($consulta){
    $this->consulta = $consulta;
}

//get
public function getPlano(){
    $this->plano;
}

public function getNumero_C(){
    $this->numero_consultas;
}

public function getConsulta(){
    $this->consulta;
}

public function __construct($plano, $numero_consultas, $consulta)
{
    $this->plano = $plano;
    $this->numero_consultas = $numero_consultas;
    $this->consulta = $consulta;
}

}

?>