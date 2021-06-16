<?php 

require_once("config.php");

use Cliente\Cadastro;
 
 $cad = new Cadastro();
$cad->setNome("Gustavo Arruda");
$cad->setEmail("Gustavoleone3456@hotmail.com");
$cad->setSenha("123456789");

$cad->registrarVenda();


?>