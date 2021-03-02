<?php

class Contador{

//atributos
public $cont;
public $premio;
public $desconto;

//set
public function setCont($cont){
    $this->cont = $cont;
   
}

public function setPremio($premio){
    $this->premio = $premio;
}

public function setDesconto($desconto){
    $this->desconto = $desconto;
}

//get
public function getCont(){
    return $this->cont;
   
}

public function getPremio(){
    return $this->premio;
}

public function getDesconto(){
    return $this->desconto;
}

public function __construct($cont, $premio, $desconto = null)
{
    $this->premio = $premio;
    $this->cont = $cont;
    $this->desconto = $desconto;
    
}

}

?>