<?php 

require_once "data/conflict.php";
require_once "data/helper.php";

$conf1 = new Data\one\ConflictLaut();#class
$conf2 = new Data\two\ConflictGurun();
#Data\one\Conflict\helpMe();
$conf1->helpMe();#function
$conf2->save();


######## Constant
$has = helper\APPLICATION;#constant
echo helper\APPLICATION;
helper\helpMe();
helper\SOS();



####### Use keyword
use Data\one\ConflictLaut; #use keyword untuk class namespace
use function helper\helpMe; #use keyword untuk function namespace
use const helper\APPLICATION; #use key constant
echo "################## USE Keyword ";
echo "helper : ".helpMe;
helpMe();

#$uk1 = new conflict1();

#$uk1->helpMe();
