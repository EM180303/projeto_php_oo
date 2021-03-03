<?php
class Consulta{

protected $data;
protected $hora;
protected $motivo;
protected $medico;
protected $cliente;
public $pergunta;
public $telefone;
    
//set
public function setData($data){
    $this->data = $data;
}

public function setHora($hora){
    $this->hora = $hora;
}

public function setMotivo($motivo){
    $this->motivo = $motivo;
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

public function setTelefone($telefone){
    $this->telefone = $telefone;
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

public function getMotivo(){
    return $this->motivo;
}

public function getMedico(){
    return $this->medico;
}

public function getPergunta(){
    return $this->pergunta;
}

public function getTelefone(){
    return $this->telefone;
}

public function __construct($cliente, $data, $hora, $motivo, $medico, $pergunta, $telefone = null)
{
    $this->cliente = $cliente;
    $this->data = $data;
    $this->hora = $hora;
    $this->motivo = $motivo; 
    $this->medico = $medico;
    $this->telefone = $telefone;
    $this->pergunta = $pergunta;
}

public function Exibir(){
    return "Nome do paciente: $this->cliente <br> Data: $this->data <br> Hora: $this->hora <br> Motivo: $this->motivo <br> Medico: $this->medico";
}

public function PacienteNoLocal($pergunta){
    echo "<br>";
    echo"O paciente já chegou? ";
    if($pergunta == "sim"){
        echo"$pergunta";
    }else{
        echo"$pergunta";
        echo"<br> Ligue para ele: $this->telefone";
    }
}

}
$objconsulta = new Consulta("Edu", "22/08/2021", "14:00", "Dor no joelho", "Dr. Dráuzio", "sim", 81985624197);
echo $objconsulta->Exibir();
$objconsulta->PacienteNoLocal($objconsulta->getPergunta());

?>