<h1>
<?php

$nome = "Pato";

function teste(){
	global $nome;
	echo $nome;
}
function teste2(){
	global $nome;
	echo " ".$nome." No teste 2";
}
teste();
teste2();

?>
</h1>