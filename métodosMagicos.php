<?php 
	class Carro01{
		private $modelo;
		private $motor;
		private $ano;

		public function __construct($a,$b,$c){
			$this->modelo = $a;
			$this->motor = $b;
			$this->ano = $c;
		}
		public function __destruct(){
			var_dump("mete bala");
		}
		public function __toString(){
			return "Seu carro é ".$this->modelo."com um motor ".$this->motor."do ano ".$this->ano;
		}
		
	}

	$gol = new Carro01("Gol bolinha","1.6","2016");
	echo $gol;
 ?>