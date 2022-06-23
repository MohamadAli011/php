<?php 

require_once "data/Programmer.php";

$comp = new Company();
#$comp->programer = new Programer("Eko");
#$var_dump($comp);
#echo "ini Programmer \n";
$comp->programmer = new Programmer("Eko");
#var_dump($comp);

#echo "BackEnd \n";
$comp->programmer = new BackendProgrammer("joko");
#var_dump($comp);

sayHelloProgrammer(new Programmer("Deko"));


 ?>