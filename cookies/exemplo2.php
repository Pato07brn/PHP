<?php 
	
	if (isset($_COOKIE["NOME_DO_COOKEI"])) {
	
		$obj = json_decode($_COOKIE["NOME_DO_COOKEI"]);

		echo $obj->empresa;

	}

 ?>