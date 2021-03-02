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
    return $this->plano;
}

public function getApelido(){
    return $this->apelido;
}

public function getConsulta(){
    return $this->consulta;
}

public function getNum_consultas(){
    return $this->num_consultas;
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