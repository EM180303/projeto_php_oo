<?php

class Cliente{

    public $plano;
    public $apelido;
    public $consulta;
    public $num_consultas;
    
//set
public function setPlano($plano){
    $this->plano = $plano;
}

public function setNumero_C($apelido){
    $this->apelido = $apelido;
}

public function setConsulta($consulta){
    $this->consulta = $consulta;
}

public function setNum_consultas($num_consultas){
    $this->num_consultas = $num_consultas;
}

//get
public function getPlano(){
    $this->plano;
}

public function getApelido(){
    $this->apelido;
}

public function getConsulta(){
    $this->consulta;
}

public function getNum_consultas(){
    $this->num_consultas;
}

public function __construct($plano, $apelido, $consulta = null, $num_consultas)
{
    $this->plano = $plano;
    $this->numero_consultas = $apelido;
    $this->consulta = $consulta;
    $this->num_consultas = $num_consultas;
}

}

?>