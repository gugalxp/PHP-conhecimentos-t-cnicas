    <?php 
     
     
    	class Notebook {
    		private $marca;
    		private $cor;
    		private $processador;
            private $ddr;

    		public function __construct($marca,$cor,$processador
                , $ddr
            ){
    			$this->marca = $marca;
    			$this->cor = $cor;
    			$this->processador = $processador;
                $this->ddr = $ddr;
    		}
     
    		public function __destruct(){
    			return "A página foi totalmente carregada";
    		}
     
    		public function __toString(){
    			return "O meu notebook " . $this->marca . " é da cor " . $this->cor . ", tem um processador " . $this->processador . " e uma memória ram " . $this->ddr . "<br/>"  .$this->__destruct();
    		}
    	}
     
    	$samsung = new Notebook("Samsung", "branco", "i7", "DDR4 16GB" );
    	echo $samsung;
     
    ?>