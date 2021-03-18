<?php

require "menssagem.php";

class Consulta extends Menssagem{

protected $data;
protected $hora;
protected $medico;
protected $cliente;
public $pergunta;
    
//set
public function setData($data){
    $this->data = $data;
}

public function setHora($hora){
    $this->hora = $hora;
}

public function setMedico($medico){
    $this->medico = $medico;
}

public function setCliente($cliente){
    $this->cliente = $cliente;
}

public function setPergunta($pergunta){
    $this->pergunta = $pergunta;
}

//get
public function getCliente(){
    return $this->cliente;
}

public function getData(){
    return $this->data;
}

public function getHora(){
    return $this->hora;
}

public function getMedico(){
    return $this->medico;
}

public function getPergunta(){
    return $this->pergunta;
}

public function __construct($cliente, $data, $hora, $medico, $pergunta)
{
    $this->cliente = $cliente;
    $this->data = $data;
    $this->hora = $hora; 
    $this->medico = $medico;
    $this->pergunta = $pergunta;
}

public function Exibir(){
    return "Nome do paciente: $this->cliente <br> Data: $this->data <br> Hora: $this->hora <br> Medico: $this->medico";
}

public function mostrarM($parametro){
    echo "<br>";
    echo"Consulta confrimada? ";
    if($parametro == "sim"){
        $veri = true;
        echo"$parametro";
    }else{
        $veri = false;
        echo"$parametro";
    }
}

}
$objconsulta = new Consulta("Edu", "22/08/2021", "14:00", "Dr. Dráuzio", "sim");
echo $objconsulta->Exibir();
$objconsulta->mostrarM($objconsulta->getPergunta());

?>