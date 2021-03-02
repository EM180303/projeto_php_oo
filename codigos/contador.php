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
    $this->cont;
   
}

public function getPremio(){
    $this->premio;
}

public function getDesconto(){
    $this->desconto;
}

public function __construct($cont, $premio, $desconto = null)
{
    $this->premio = $premio;
    $this->cont = $cont;
    $this->desconto = $desconto;
    
}

}

?>