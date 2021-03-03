<?php

class Medico{

public $especialidade;
public $anos_prof;
public $dias_q_trabalha;
public $consulta;
public $drt;


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


public function setDrt($drt){
    $this->drt = $drt;
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

public function getDrt(){
   return $this->drt;
}


public function __construct($especialidade, $anos_prof, $dias_q_trabalha, $drt, $consulta = null)
{
    $this->especialidade = $especialidade;
    $this->anos_prof = $anos_prof;
    $this->dias_q_trabalha = $dias_q_trabalha;
    $this->consulta = $consulta;
    $this->drt = $drt;
}

public function Exibir(){
    return "Área de atuação: $this->especialidade <br> Anos de profissão: $this->anos_Prof <br> Dia(s) que trabalha: $this->dias_q_trabalha <br> "
}

}

?>