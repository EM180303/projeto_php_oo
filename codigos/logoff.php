<?php

class Logoff{

public function Deslogar(){

    session_start();

    session_destroy();
    header('Location:index.php?login=deslogado');

}

}

$objLogoff = new Logoff;
$objLogoff->Deslogar();

?>