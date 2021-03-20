<?php

class Navegacao{

public function Validar(){
session_start();

if(!isset($_SESSION['validado']) | $_SESSION['validado'] != 'SIM'){
    header('Location:index.php?login=erro1');
}
}

}
$objnavegacao = new Navegacao;
$objnavegacao->Validar();
?>