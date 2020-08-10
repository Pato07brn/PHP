<?php 
	function __autoload($nomeClasse){
		var_dump($nomeClasse); 
		require_once("$nomeClasse.php");

	}

	$Rasiel = new Cachorro();
	
	$gol = new Carro02;

 ?>