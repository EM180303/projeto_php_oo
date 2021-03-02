<?php

class Avaliacao{

public $media;
public $estrelas;
public $comentario;

//set
public function setMedia($media){
    $this->media = $media;
}

public function setEstrelas($estrelas){
    $this->estrelas = $estrelas;
}

public function setComentario($comentario){
    $this->comentario = $comentario;
   
}

//get
public function getMedia(){
    $this->media;
}

public function getEstrelas(){
    $this->estrelas;
}

public function getComentario(){
    $this->comentario;
   
}

public function __construct($media, $estrelas, $comentario = null)
{
    $this->media = $media;
    $this->estrelas = $estrelas;
    $this->comentario = $comentario;
}

}

?>