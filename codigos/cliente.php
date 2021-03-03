<?php

class Cliente{

    public $plano;
    public $apelido;
    public $consulta;
    public $num_consultas;
    
//set
public function setPlano($plano){
    $this->plano = $plano;
}

public function setNumero_C($apelido){
    $this->apelido = $apelido;
}

public function setConsulta($consulta){
    $this->consulta = $consulta;
}

public function setNum_consultas($num_consultas){
    $this->num_consultas = $num_consultas;
}

//get
public function getPlano(){
    return $this->plano;
}

public function getApelido(){
    return $this->apelido;
}

public function getConsulta(){
    return $this->consulta;
}
 
public function getNum_consultas(){
    return $this->num_consultas;
}

public function __construct($plano, $apelido, $num_consultas, $consulta = null)
{
    $this->plano = $plano;
    $this->apelido = $apelido;
    $this->consulta = $consulta;
    $this->num_consultas = $num_consultas;
}

public function Exibir(){
    return "Plano: $this->plano <br> Nº Consultas: $this->num_consultas <br> Nome: $this->apelido";
}

}

$objcliente = new Cliente("Saude Plus", "Edu", "0");
echo $objcliente->Exibir();

?>