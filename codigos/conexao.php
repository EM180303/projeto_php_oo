<?php

$host = "127.0.0.1";
$user = "root";
$senha = "";
$bd = "bd_hope";

$conect = mysqli_connect($host, $user, $senha, $bd);

if($conect->connect_error) {
    die("Erro Conexão: " .$conect->connect_error);
}

?>