<?php
class Consulta{

protected $data;
protected $hora;
protected $motivo;
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

public function __construct($cliente, $data, $hora, $motivo, $medico, $pergunta)
{
    $this->cliente = $cliente;
    $this->data = $data;
    $this->hora = $hora;
    $this->motivo = $motivo; 
    $this->medico = $medico;
    $this->pergunta = $pergunta;
}

public function Exibir(){
    return "Nome do paciente: $this->cliente <br> Data: $this->data <br> Hora: $this->hora <br> Motivo: $this->motivo <br> Medico: $this->medico";
}

public function PacienteLocal($pergunta){
    echo "<br>";
    echo"Consulta confrimada? ";
    if($pergunta == "sim"){
        $veri = true;
        echo"$pergunta";
    }else{
        $veri = false;
        echo"$pergunta";
    }
}

}
$objconsulta = new Consulta("Edu", "22/08/2021", "14:00", "Dor no joelho", "Dr. Dráuzio", "sim");
echo $objconsulta->Exibir();
$objconsulta->PacienteLocal($objconsulta->getPergunta());

?>