<?php

class Avaliacao{

public $avaliacao;
public $estrelas;

//set
public function setAvaliacao($avaliacao){
    $this->avaliacao = $avaliacao;
}

public function setEstrelas($estrelas){
    $this->estrelas = $estrelas;
}

//get
public function getAvaliacao(){
    $this->avaliacao;
}

public function getEstrelas(){
    $this->estrelas;
}

public function __construct($avaliacao, $estrelas)
{
    $this->avaliacao = $avaliacao;
    $this->estrelas = $estrelas;
}

}

?>