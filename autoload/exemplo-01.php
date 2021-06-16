<?php 

spl_autoload_register(function($class){

if (file_exists($class.".php")) {

require_once($class.".php");

}

});



$carro = new DelRey();

$carro->acelerar(80);

?>

