<?php 
	function AcharClasse($nomeClasse){
		if (file_exists($nomeClasse.".php") === true){ 
			require_once($nomeClasse.".php");
		}
	}

	spl_autoload_register("AcharClasse");
	spl_autoload_register(function($nomeClasse){
		if (file_exists("classes".DIRECTORY_SEPARATOR.$nomeClasse.".php") === true){ 
			require_once("classes".DIRECTORY_SEPARATOR.$nomeClasse.".php");
		}
	});

	$Rasiel = new Cachorro();
	echo $Rasiel->andar();
	$gol = new Carro02;
	echo "<br> ";
	$gol->exibeDados();

 ?>