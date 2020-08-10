<?php 
	class Carro02 extends Carro01{#   Começo da classe filha Carro02

		public function exibeDados(){
			echo $this->modelo."<br>";
			echo $this->motor."<br>";
			//echo $this->ano."<br>";//dá ruim
		}
	}#						Término da classe Carro02
 ?>