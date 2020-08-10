<?php
//atribuição
$nome = "hcode";
echo $nome . " mais algo<br/>";

$nome .= " Treinamentos";
echo $nome; 

echo "<br/><br/>";
//Combinação
$valor_total=0;

$valor_total+= 100;
$valor_total-= 50;
$valor_total*= .9;

echo $valor_total;

echo "<br/><br/>";
//aritimetricos
$a=10;
$b=5.0;

echo $a + $b . "<br/>";
echo $a - $b . "<br/>";
echo $a * $b . "<br/>";
echo $a / $b . "<br/>";
echo $a % $b . "<br/>";
echo $a ** $b . "<br/>";

echo "<br/><br/>";
//comparação
var_dump($a > $b);
echo "<br/>";

var_dump($a < $b);
echo "<br/>";
 
var_dump($a == $b);
echo "<br/>"; 

var_dump($a === $b);
echo "<br/>"; 

var_dump($a != $b);
echo "<br/>"; 

var_dump($a !== $b);
echo "<br/>"; 

var_dump(35 <=> 25);
echo "<br/>"; 

$c = NULL;
$d = NULL;

echo $c ?? $d ?? $a;
echo "<br/>"; 

///////////////
//incrementais e demencretais
echo "<br/>"; 
echo "<br/>"; 

$c = 1;
echo $c++;
echo "<br/>"; 
echo $c;
echo "<br/>"; 
echo --$c; 
?>

