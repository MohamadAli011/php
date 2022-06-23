<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Budi";
$manager->tit = "xxxx";
$manager->sayHello("Joko","subang");

$vp = new VivePresident();
$vp->name = "Eko";
$vp->sayHello("Joko","subang");

