<?php

require "menssagem.php";

class Avaliacao extends Menssagem{

public $media;
public $estrelas;
public $comentario;
public $total;
public $totalAvaliacao;

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

public function setTotal($total){
    $this->total = $total;
}

public function setTotalAvaliacao($totalAvaliacao){
    $this->totalAvaliacao = $totalAvaliacao;
}

//get
public function getMedia(){
    return $this->media;
}

public function getEstrelas(){
    return $this->estrelas;
}

public function getComentario(){
    return $this->comentario;
}

public function getTotal(){
    return $this->total;
}

public function getTotalAvaliacao(){
    return $this->totalAvaliacao;
}


public function __construct($estrelas, $total, $totalAvaliacao, $comentario = null)
{
    
    $this->estrelas = $estrelas;
    $this->comentario = $comentario;
    $this->total = $total;
    $this->totalAvaliacao = $totalAvaliacao;
    
}

public function atribuindoTotalAvaliacao($totalAvaliacao){
    $totalAvaliacao +=1;
    return $this->totalAvaliacao = $totalAvaliacao;
}

public function atribuindoEstrela($estrela, $total){
    $total += $estrela;
    return $this->total = $total;
}

public function calcMedia($total, $totalAvaliacao){
    $this->media = $total / $totalAvaliacao;
    return $this->media;
}

public function Exibir(){
    return "Sua avaliação: $this->estrelas <br> Média de avaliações: $this->media <br> Seu comentário: $this->comentario";
}

function mostrarM($parametro){
    if($parametro){
        return "Muito obrigado!";
    }else{
        return "ajude-nos a melhorar"; 
    }
    }

}

$objavaliacao = new Avaliacao(5, 13, 3, "Muito bom");
$objavaliacao->atribuindoEstrela($objavaliacao->getEstrelas(),$objavaliacao->getTotal());

$objavaliacao->atribuindototalAvaliacao($objavaliacao->getTotalAvaliacao());

$objavaliacao->calcMedia($objavaliacao->getTotal(), $objavaliacao->getTotalAvaliacao());

echo $objavaliacao->Exibir();
echo "<br>";
echo $objavaliacao->mostrarM($objavaliacao->getEstrelas())
?>