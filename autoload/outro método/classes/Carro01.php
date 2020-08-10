<?php 
interface veiculo{
		public function exibe();
	}
	abstract class Carro01 {#Começo da classe Carro01
		public $modelo = "Gol";
		protected $motor = 1.6;
		private $ano = "2005-a";

		public function exibe(){
			echo $this->modelo."<br>";
			echo $this->motor."<br>";
			echo $this->ano."<br>";
		}
	}#         				Término da classe Carro01
 ?>