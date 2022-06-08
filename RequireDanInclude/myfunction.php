<?php 

function test(){
	echo "string";
}
function sayHello(string $name, $filter){
	$finalName = $filter($name);
	echo "Hello $finalName" . PHP_EOL;
}
 ?>