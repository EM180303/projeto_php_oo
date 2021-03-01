<?php

class Medico{

public $especialidade;
public $anos_prof;

//set
public function setEspecialidade($especialidade){
    $this->especialidade = $especialidade;
}

public function setAnos_Prof($anos_prof){
    $this->anos_prof = $anos_prof;
}

//get
public function getEspecialidade(){
    $this->especialidade;
}

public function getAnos_Prof(){
    $this->anos_prof;
}

public function __construct($especialidade, $anos_prof)
{
    $this->especialidade = $especialidade;
    $this->anos_prof = $anos_prof;
}

}

?>