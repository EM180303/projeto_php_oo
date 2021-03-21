<?php

require "menssagem.php";
session_start();

class Consulta extends Menssagem{

protected $data;
protected $medico;
protected $cliente;
protected $plano;
public $pergunta;
    
//set
public function setData($data){
    $this->data = $data;
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

public function setPlano($plano){
    $this->plano = $plano;
}

//get
public function getCliente(){
    return $this->cliente;
}

public function getData(){
    return $this->data;
}

public function getMedico(){
    return $this->medico;
}

public function getPergunta(){
    return $this->pergunta;
}

public function getPlano(){
    return $this->plano;
}

public function __construct($cliente, $data, $medico, $pergunta, $plano)
{
    $this->cliente = $cliente;
    $this->data = $data; 
    $this->medico = $medico;
    $this->pergunta = $pergunta;
    $this->plano = $plano;
}

public function Exibir(){
    return "Nome do paciente: $this->cliente <br> Forma de pagamento ou plano: $this->plano <br> Data: $this->data <br> Medico: $this->medico";
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
$objconsulta = new Consulta($_SESSION['nome'], $_POST['data'], $_POST['medico'], "sim", $_POST['pagamento']);
echo $objconsulta->Exibir();

?>