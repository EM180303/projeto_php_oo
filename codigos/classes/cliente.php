<?php
require "usuario.php";
require "usuariointer.php";

class Cliente extends Usuario implements UsuarioInter{

    public $plano;
    public $apelido; 
    public $consulta;
    public $num_consultas;
    public $valid;
    public $conf;
    
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

public function setConf($conf){
    $this->conf = $conf;
}

public function setValid($valid){
    $this->valid = $valid;
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

public function getConf(){
    return $this->conf;
}

public function getValid(){
    return $this->valid;
}

public function __construct($plano, $apelido, $num_consultas, $conf, $consulta = null)
{
    $this->plano = $plano;
    $this->apelido = $apelido;
    $this->consulta = $consulta;
    $this->num_consultas = $num_consultas;
    $this->conf = $conf;    
}

public function Exibir(){
    return "Plano: $this->plano <br> Nº Consultas: $this->num_consultas <br> Nome: $this->apelido";
}

public function Confirme($conf){
    $this->valid = false; 
    if($conf == "sim"){
        $this->valid = true;
    }
}

public function Validado($valid){
    if ($valid){
        echo "Dados validados";
    }else{
        echo "Dados invalidos";
    }
}

public function Exibdirtipo($tipo){
    if($tipo == "Cliente"){
        echo "<h1> Cliente </h1>";
    } 
}

}
$objusario = new Usuario("Eduardo", "edu@gmail.com", "1803", "18/03/2003", "sim", "Cliente", 81985624197);
$objendereco = new Endereco("54240-030", "Rua 04", "Curado I", "Jaboatão", 75, "PE", "Brasil", "C");
$objcliente = new Cliente("Saude Plus", "Edu", "0", "sim");
$objusario->setEndereco($objendereco->ResumoEndereco());
$objcliente->Exibdirtipo($objusario->getTipo());
echo $objusario->Exibir();
$objusario->Confirme($objusario->getVeri());
echo $objusario->Validado($objusario->getConf());
$objusario->setEndereco($objendereco->Distancia($objendereco->getUf(), $objendereco->getEstado()));
echo "<hr>";
echo $objcliente->Exibir();
echo "<br>";
$objcliente->Confirme($objcliente->getConf());
$objcliente->Validado($objcliente->getValid());

?>