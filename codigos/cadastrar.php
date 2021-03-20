<?php
require "usuario.php";
require "conexao.php";

class Cadastrar{

public function inserir($conect)
	{ 
		$data = date('YmdHis');
		
		$stmt = $conect->prepare("INSERT INTO cadastro (hope_ca_nome,hope_ca_email,hope_ca_senha,hope_ca_nascimento,hope_ca_data,hope_ca_funcao,hope_ca_cep,hope_ca_rua,hope_ca_bairro,hope_ca_cidade,hope_ca_uf,hope_ca_complemento,hope_ca_nresi,hope_ca_telefone) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("ssssdsssssssis",$_POST['name'], $_POST['email'], $_POST['pass'], $_POST['nascimento'], $data, $_POST['função'] ,$_POST['cep'], $_POST['rua'], $_POST['bairro'], $_POST['cidade'], $_POST['uf'], $_POST['complemento'], $_POST['numeroresi'],$_POST['telefone']);
		$stmt->execute();
	}

}

$objcdastro = new Cadastrar ();
$objcdastro->inserir($conect);
$conect->close();

echo ("<script>
window.alert('Cadastro realizado com sucesso!')
window.location.href='home.php';
</script>");

?>