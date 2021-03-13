<?php

abstract class Menssagem{
   
    public $parametro;

    public function getParametro(){
        return $this->parametro;
    }

    public function setParametro($parametro){
        $this->parametro = $parametro;
    }

    abstract function mostrarM($parametro);

}

?>