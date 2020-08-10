<?php 
	//como eu fiz
	class Carro01{
		private $modelo;
		private $motor;
		private $ano;

		public function getModelo(){
			return $this->modelo.$this->motor.$this->ano;
		}
		public function setModelo($modelo,$motor,$ano){
			$this->modelo = $modelo;
			$this->motor = $motor;
			$this->ano = $ano;
			return array(
				"modelo"=>$this->modelo,
				"motor"=>$this->motor,
				"ano"=>$this->ano,
			);
		}
	}

	$gol = new Carro01();
	print_r($gol->setModelo("Gol bolinha","1.6","2016"));
	echo "<br>";
	echo "<br>";
 ?>

 <?php 
	//como o professor fez
	class Carro{
		private $modelo;
		private $motor;
		private $ano;

		public function getModelo():string{
			return $this->modelo;
		}
		public function setModelo($modelo){
			$this->modelo = $modelo;
		}

		public function getMotor():float{
			return $this->motor;
		}
		public function setMotor($motor){
			$this->motor = $motor;
		}

		public function getAno():int{
			return $this->ano;
		}
		public function setAno($ano){
			$this->ano = $ano;
		}

		public function exibe(){
			return array(
				"modelo"=>$this->modelo,
				"motor"=>$this->motor,
				"ano"=>$this->ano,
			);
		}
		
	}

	$gol = new Carro();
	$gol->setModelo("Gol bolinha");
	$gol->setMotor("1.6");
	$gol->setAno("2020");

	var_dump($gol->exibe());

 ?>