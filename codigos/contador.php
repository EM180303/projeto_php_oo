<?php

class Contador{

//atributos
public $cont;
public $premio;

//set
public function setCont($cont){
    $this->cont = $cont;
   
}

public function setPremio($premio){
    $this->premio = $premio;
}
public function __construct($cont, $premio)
{
    $this->premio = $premio;
    $this->cont = $cont;
}

}

?>