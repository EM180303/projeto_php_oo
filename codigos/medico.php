<?php

class Medico{

public $especialidade;
public $anos_prof;
public $dias_q_trabalha;
public $consulta;
public $num_consultas;


//set
public function setEspecialidade($especialidade){
    $this->especialidade = $especialidade;
}

public function setAnos_Prof($anos_prof){
    $this->anos_prof = $anos_prof;
}

public function getDias_q_trabalha($dias_q_trabalha){
    $this->dias_q_trabalha = $dias_q_trabalha;
}

public function setConsulta($consulta){
    $this->consulta = $consulta;
}


public function setNum_consultas($num_consultas){
    $this->num_consultas = $num_consultas;
}

//get
public function getEspecialidade(){
    return $this->especialidade;
}

public function getAnos_Prof(){
    return $this->anos_prof;
}

public function getConsulta(){
    return $this->consulta;
}

public function getNum_consultas(){
   return $this->num_consultas;
}


public function __construct($especialidade, $anos_prof, $dias_q_trabalha, $num_consultas, $consulta = null)
{
    $this->especialidade = $especialidade;
    $this->anos_prof = $anos_prof;
    $this->dias_q_trabalha = $dias_q_trabalha;
    $this->consulta = $consulta;
    $this->num_consultas = $num_consultas;
}

}

?>