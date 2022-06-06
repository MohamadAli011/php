<?php 
#data array pertama
$ar1 = [
	"ban" => 235
];
#data array dua
$ar2 = [
	"velg" => 15
];

$full = $ar1 +$ar2;
 
var_dump($full);
var_dump($ar1!==$ar2);
 ?>