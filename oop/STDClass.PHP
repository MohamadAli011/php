<?php 

$array =[
	"firstname" => "eko",
	"Jenkel" => "Laki"

];

$object = (object)$array;

var_dump($object);
 
$arrayb = (array) $object;
var_dump($arrayb);



 ?>