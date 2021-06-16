
    <?php
    // Aqui criamos o nome da classe
    class Carro {
     
    	private $modelo; // Aqui definimos os atributos (Basicamente são variáveis), porém com um poder maior.
    	private $motor; // Aqui definimos os atributos (Basicamente são variáveis), porém com um poder maior.
    	private $ano; // Aqui definimos os atributos (Basicamente são variáveis), porém com um poder maior.
     
    // Aqui criamos um método (basicamente uma função que irá ser executada mais tarde).
    // Essa execução irá (palavra "get" colado com o nome da função, tem essa tarefa de...) pegar um valor
    	public function getModelo(){
    // Como já estamos dentro da classe Carro, temos que utilizar o $this para não precisar repetir o nome da classe, basicamente seria a mesma coisa que $Carro->modelo.
    // Depois utilizamos a seta para acessar o atributo da classe.
    		return $this->modelo;
    // E então... retorna o conteúdo do atributo $modelo.
    	}
     
    // Aqui criamos um método (basicamente uma função que irá ser executada mais tarde).
    // Essa execução irá (palavra "set" colado com o nome da função, tem essa tarefa de...) definir um valor para o parâmetro que é passado na função.
    // Se o parâmetro for passado ex: Jetta GLI - GOL
    	public function setModelo($modelo){
    // O modelo(atributo depois da seta) da classe($this, Carro) será Jetta GLI - GOL (Valor que foi passado no parâmetro, $modelo)
    		$this->modelo = $modelo;
     
    	}
     
    	public function getMotor():float{ // de maneira similar o :float define que o retorno dessa função será um valor DECIMAL
     
    		return $this->motor;
     
    	}
     
    	public function setMotor($motor){
     
    		$this->motor = $motor;
     
    	}
     
    	public function getAno():int{ // o :int define que o retorno dessa função será um valor INTEIRO
     
    		return $this->ano;
     
    	}
     
    	public function setAno($ano){
     
    		$this->ano = $ano;
     
    	}
     
    	public function exibir(){
     
    		return array(
    // "chave do array"=>$classe->getAtributo()
    			"modelo"=>$this->getModelo(),
    			"motor"=>$this->getMotor(),
    			"ano"=>$this->getAno()
     
    		);
     
    	}
     
    }
     
    $gol = new Carro(); // Cria um objeto ou instancia (Basicamente é o mesmo que dar um ctrl+c na classe Carro e alterar somente algumas coisas na cópia $gol)
    $gol->setModelo("Jetta GLI"); // Valor definido para o parâmetro (foi falado la na linha 21)
    $gol->setMotor("2.0"); // Valor definido para o parâmetro (foi falado la na linha 21)
    $gol->setAno("2020"); // Valor definido para o parâmetro (foi falado la na linha 21)
     
    var_dump($gol->exibir()); // Exibe tudo que foi definido nos atributos e métodos
     
    ?>