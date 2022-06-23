<?php 

require_once "data/VehicAbstract.php";

use Data\{Vehic, Jeep, Truck};

$JK = new Jeep();
$JK->name = "JK";
$JK->CC = 4500;
$JK->tahun = 1995;
$JK->run();


$Hino = new Truck();
$Hino->name = "DT100";
$Hino->CC = "8000";
$Hino->tahun = 1995;
$Hino->run();

 ?>