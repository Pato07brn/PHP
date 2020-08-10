<?php 

	class Pato {
		
		public $nome;

		public function falar(){
			return "Oi meu nome é ".$this->nome;
		}
	}

	$bruno = new Pato();

	$bruno -> nome = "Bruno Nascimento";

	echo $bruno -> falar();

 ?>
