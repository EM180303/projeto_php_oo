<?php
require "usuario.php";

class Medico extends Usuario{

public $especialidade;
public $anos_prof;
public $dias_q_trabalha;
public $consulta;
public $drt;


//set
public function setEspecialidade($especialidade){
    $this->especialidade = $especialidade;
}

public function setAnos_Prof($anos_prof){
    $this->anos_prof = $anos_prof;
}

public function getDias_q_trabalha($dias_q_trabalha){
    $this->dias_q_trabalha = $dias_q_trabalha;
}

public function setConsulta($consulta){
    $this->consulta = $consulta;
}
 

public function setDrt($drt){
    $this->drt = $drt;
}

//get
public function getEspecialidade(){
    return $this->especialidade;
}

public function getAnos_Prof(){
    return $this->anos_prof;
}

public function getConsulta(){
    return $this->consulta;
}

public function getDrt(){
   return $this->drt;
}


public function __construct($especialidade, $anos_prof, $dias_q_trabalha, $drt, $consulta = null)
{
    $this->especialidade = $especialidade;
    $this->anos_prof = $anos_prof;
    $this->dias_q_trabalha = $dias_q_trabalha;
    $this->consulta = $consulta;
    $this->drt = $drt;
}

public function Exibir(){
    return "Área de atuação: $this->especialidade <br> Anos de profissão: $this->anos_prof <br> Dia(s) que trabalha: $this->dias_q_trabalha <br> Registro: $this->drt";
}

//vendo se o drt consta em nossos arquivos
public function ValidDrt($drt){
    $veri = true; //simulando verificação no bd
    if($veri){
        echo"Drt confirmado";
    }else{
        echo"Drt falso";
    }
}

} 
$objusario = new Usuario("Dr. Drauzio", "drdrauzio@gmail.com", "1234", "22/08/1953", "sim", "Médico", 81985624197);
$objendereco = new Endereco("54340-040", "Rua das Flores", "Madalena", "Recife", 105, "PE", "Brasil", "Ap 18");
$objusario->setEndereco($objendereco->ResumoEndereco());
echo $objusario->Exibir();
$objusario->Confirme($objusario->getVeri());
echo $objusario->Validado($objusario->getConf());
$objusario->setEndereco($objendereco->Distancia($objendereco->getUf(), $objendereco->getEstado()));
echo "<hr>";
$objmedico = new Medico ("Clínico geral", 25, "Segunda", 541865);
echo $objmedico->Exibir();
echo"<br>";
$objmedico->ValidDrt($objmedico->getDrt());

?>