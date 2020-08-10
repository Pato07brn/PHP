<?php
	//basicos
	$nome = "Bruno";
	$site = 'dus crias';

	$ano=2000;
	$salario= 8100.99;
	$bloqueado=false;

////////////////////////////////////////////////////////
	//compostos
	$frutas = array("abacaxi", "laranja", "manga");

	//echo $frutas[2]."<br/>";

	$nascimento = new DateTime();

	//var_dump($nascimento);
////////////////////////////////////////////////////////
	//Especiais
	$arquivo = fopen("index.php", "r");
	//var_dump($arquivo);

	$nulo = NULL;
	$vazio="";
?>