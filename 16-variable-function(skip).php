<?php 

#variable function 
function sayHei(string $name, $filter){
	$finalName = $filter($name);
	echo "Hello $finalName" . PHP_EOL;
}

function foo(){
	echo "Foo \n";
}

function bar(){
	echo "bargfdg \n";
}

echo "test panngil manual: ";
foo();

echo "test panngil ribet: ";
$panggilfoo = "foo";
$panggilfoo();

echo "test panngil ribet2: ";
$panggilfoo = "bar";
$panggilfoo();

function ribet($name, $beruk){
	$finalName = $beruk($name);
	echo "Hello $finalName \n";
}

ribet("eko", "foo")
#sayHei("Eko", "strtoupper");
#sayHei("Eko", "strtolower");




 ?>
