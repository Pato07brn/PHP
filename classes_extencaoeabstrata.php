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



	//$gol = new Carro01();
	//echo $gol->modelo."<br>";
	//echo $gol->motor."<br>";//dá ruim
	//echo $gol->ano."<br>";//dá ruim
	//$gol -> exibe();



	class Carro02 extends Carro01{#   Começo da classe filha Carro02

		public function exibeDados(){
			echo $this->modelo."<br>";
			echo $this->motor."<br>";
			//echo $this->ano."<br>";//dá ruim
		}
	}#						Término da classe Carro02

	echo '<br>';
	$gol2 = new Carro02();
	echo "$gol2->modelo";
 ?>