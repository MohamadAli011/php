<?php 

/**
 * 
 */
class Manager
{
	var string $name;
	var string $tit;

	function sayHello(string $name, string $tit){
		echo "Hi $name my name is Manager $this->name and title $tit \n";
		#echo "kata $this->name \n";
	}
}

class VivePresident extends Manager{

	function sayHello(string $name, string $tit){
		echo "Hi $name my name is Manager $this->name and title $tit \n";
		#echo "kata $this->name \n";
	}

}

 ?>