<?php 

$data = new DateTime();

$periodo = new DateInterval("P15D");

echo $data -> format("d/m/s H:i:s");

$data -> add($periodo);

echo "<br>";

echo $data -> format("d/m/s H:i:s");

 ?>