<?php 

	require_once("config.php");

	use Cliente\Cadastro;

	$cad = new Cadastro();

	$cad->setNome("Bruno Nascimento");
	$cad->setEmail("brunoncrreas@gmail.com");
	$cad->setSenha("34091620");

	$cad->registrarVenda();



 ?>