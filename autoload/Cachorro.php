<?php 

	class Cachorro extends Animal{
		
		public function falar(){
			return "late";
		}
		public function andar(){
			return "Corre nada e ".parent::andar();#palavra reservada para fazer referência a classe pai no caso Animal
		}

	}
 ?>