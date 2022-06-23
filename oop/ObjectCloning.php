<?php 

require_once "data/Student.php";

$Std1 = new Student();
$Std1->id ="1";
$Std1->name = "Axel";
$Std1->age = 10;

#var_dump($Std1);

$Std1->setSample("kiol");

$Std2 = clone $Std1;

echo "ID $Std1->id";
#var_dump($Std2);
#$Std2->setSample("lukos");

#### Membandingkan objek
#var_dump($Std1 == $Std2);

 ?>