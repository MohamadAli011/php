<?php 

require_once "data/conflict.php";
require_once "data/helper.php";

#######use keyword#######
use Data\one\Conflict1; #use keyword untuk class namespace
use function helper\helpMe; #use keyword untuk function namespace
use const helper\APPLICATION; #use key constant

echo "use kye : ";
helpMe();

$uk1 = new conflict1();

$uk1->helpMe();


######alias#####
#untuk class/function dengan nama yg sama

use Data\one\Conflict1 as conf1;
use Data\two\Conflict2 as conf2;

$cofi = new conf1();

#grup import pada class
use Data\two\{Conflict2 as conf2, Conflict3, Conflict4};
 ?>