<?php
require "conexao.php";

class V_Login{

public function Validar($conect){

    session_start();
        
    header('Access-Control-Allow-Origin: *');
    
    $email = $_POST['email'];
    $senha = $_POST['pass'];
    $query_ = "SELECT * FROM cadastro WHERE hope_ca_email = '$email' AND hope_ca_senha = '$senha'";
    $resultado = $conect->query($query_);
    
    if($resultado->num_rows > 0){
        while($row = $resultado->fetch_assoc()){
            $_SESSION['idusuario'] = $row['hope_ca_id'];
            $_SESSION['nome'] = $row['hope_ca_nome'];
            $_SESSION['validado'] = 'SIM';
    
            echo ("<script>
              window.alert('Login realizado com sucesso!')
              window.location.href='home.php';
          </script>");
          
        }
    } else{
        $_SESSION['validado'] = 'NÃO';
        header('Location:index.php?login=erro');
    }
    

}

}
$objlogin = new V_Login;
$objlogin->Validar($conect);
$conect->close();
?>