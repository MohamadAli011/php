<?php 

require_once "data/Manager.php";


$manag = new Manager();
$manag->name = "kurger";
$manag->sayHello("Jebo","rojo");

$ViceP = new VivePresident();
$ViceP->name = "luxo";
$ViceP->sayHello("kaco","rakyat");

 ?>