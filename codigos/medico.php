<?php
require "usuario.php";
require "usuariointer.php";
require "conexao.php";

session_start();

class Medico extends Usuario implements UsuarioInter{

public $especialidade;
public $anos_prof;
public $dias_q_trabalha;
public $consulta;
public $crm;
public $veri;


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
 

public function setcrm($crm){
    $this->crm = $crm;
}

public function setVeri($veri){
    $this->veri = $veri;
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

public function getcrm(){
   return $this->crm;
}

public function getVeri(){
    return $this->veri;
 }


public function __construct($especialidade, $anos_prof, $dias_q_trabalha, $crm, $consulta = null)
{
    $this->especialidade = $especialidade;
    $this->anos_prof = $anos_prof;
    $this->dias_q_trabalha = $dias_q_trabalha;
    $this->consulta = $consulta;
    $this->crm = $crm;
}

public function Exibir(){
    return "Área de atuação: $this->especialidade <br> Anos de profissão: $this->anos_prof <br> Dia(s) que trabalha: $this->dias_q_trabalha <br> Registro: $this->crm";
}

//vendo se o crm consta em nossos arquivos

public function Validcrm($crm){
    //buscar crm no bd
    $this->veri = true; //caso encontre
    /*
    $this->veri1 = false; se não encontrar 
    */
}

public function Confirme($veri)
{
  
    if($veri){
        echo"crm confirmado";
    }else{
        echo"crm falso";
    }

}

public function Exibdirtipo($tipo){
    if($tipo == "Médico"){
        echo "<h1> Médico </h1>";
    }
}

public function Inserir($conect){

    $data = date('YmdHis');
		
    $stmt = $conect->prepare("INSERT INTO medicos (hope_me_id,hope_me_nomeM,hope_me_crm,hope_me_anos,hope_me_especialidade,hope_me_data) VALUES(?,?,?,?,?,?)");
    $stmt->bind_param("isiisd",$_SESSION['idusuario'],$_SESSION['nome'], $_POST['crm'], $_POST['anos'], $_POST['especialidade'], $data);
    $stmt->execute();

    echo ("<script>
				window.alert('Cadastro realizado com sucesso!')
				window.location.href='home.php';
				</script>");

}

} 
$objusario = new Usuario($_SESSION['nome'], "drdrauzio@gmail.com", "1234", "22/08/1953", "sim", "Médico", 81985624197);
$objendereco = new Endereco("54340-040", "Rua das Flores", "Madalena", "Recife", 105, "PE", "Brasil", "Ap 18");
$objmedico = new Medico ($_POST['especialidade'], $_POST['anos'], "Segunda", $_POST['crm']);

$objmedico->Inserir($conect);

?>