<?php 

class Pessoa {

	public $nome = "Rasmus Lerdof";
	protected $idade = 48;
	private $senha = "123456";

	public function verDados(){

		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";

	}

}

$objeto = new Pessoa();
echo $objeto->nome . "<br/>";
?>