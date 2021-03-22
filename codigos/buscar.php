<?php
require "conexao.php";
session_start();
if (! isset ( $_SESSION ['consultas'])) {
    $_SESSION ['consultas'] = array ();
  }
  
class Buscar{

public $consultas = array();

public function getConsulta(){
    return $this->consultas;
}

public function Select($conect){

    $data= $_POST['data'];
    $nome = $_POST['nome'];
    $medico = $_POST['medico'];
    $pagamento = $_POST['pagamento'];
   
$query_ = "SELECT * FROM consultas WHERE hope_co_paciente = '$nome' OR hope_co_medico = '$medico' OR hope_co_data = '$data' OR hope_co_pagamento = '$pagamento' ";
$resultado = $conect->query($query_);
if($resultado->num_rows > 0){
    while($row = $resultado->fetch_assoc()){

        $this->consultas[] = "Paciente: ".$row['hope_co_paciente'] . " || Medico: Dr. " . $row['hope_co_medico'] . " || Data: " . $row['hope_co_data'] . " || Plano ou pagamento: " . $row['hope_co_pagamento'] ."<br>";
        
    }

    echo ("<script>
        window.alert('Resultado da busca')
        window.location.href='exibir.php';
        </script>");

    return  $this->consultas;

} else{
    echo ("<script>
          window.alert('Não encontramos nenhuma consulta, tente novamente')
          window.location.href='procurar.php';
      </script>");
} 
}
}

$objbuscar = new Buscar;
$_SESSION['consultas']=$objbuscar->Select($conect);

?>