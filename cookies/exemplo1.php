<?php 

$data = array(
	"empresa"=>"Patocast eternament"
);

setcookie("NOME_DO_COOKEI", json_encode($data), time() + 3600);

echo "OK";

?>