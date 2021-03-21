<?php

require "conexao.php";
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

public function marcar($conect){

    $stmt = $conect ->prepare("INSERT INTO consultas (hope_co_id,hope_co_paciente,hope_co_medico,hope_co_data,hope_ca_pagamento) VALUES (?,?,?,?,?)");
    $stmt->bind_param("issss", $_SESSION['idusuario'], $_SESSION['nome'], $_POST['medico'], $_POST['data'], $_POST['pagamento']);
    $stmt->execute();         

    

  echo ( "<script>
        window.alert ('Consulta realizada com sucesso!')
        window.location.href = 'home.php';
    </script> " );

}

}
$objconsulta = new Consulta($_SESSION['nome'], $_POST['data'], $_POST['medico'], "sim", $_POST['pagamento']);
$objconsulta->marcar($conect);
$conect->close();

?>