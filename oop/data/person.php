<?php 
/**
 * 
 */
class Person
{
	
	function printt()
	{
		echo "string";
	}
}
class persia{

	const AUTHOR = "kajima";

	#properties
	var $name;
	var $addres;
	var $countries;
	#echo "string";

	function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }
	function f1(?string $name){
		if (is_null($name)) {
			echo "Hi ,myname is {$this->name}\n";
		}else {
			echo "Hellp $name, my name is {$this->name}\n";
		}
	}

	function info(){
		echo "Author : " . self::AUTHOR . PHP_EOL;
	}
	
}

 ?>