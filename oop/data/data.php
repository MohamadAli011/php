<?php 
class persia{

	const AUTHOR = "kajima";

	#properties
	var string $name;
	var string $addres;
	//variable yg boleh terima null
	var string $countries;
	var ?string $BolehNull;
	#echo "string";

	function __construct(?string $name, ?string $countries){
		$this->name = $name;
		$this->countries = $countries;
	}

	function sayHello3(?string $name)
    {
        if (is_null($name)) {
            echo "Hi, my name is $this->name" . PHP_EOL;
        } else {
            echo "Hi $name, my name is $this->name : $this->addres" . PHP_EOL;
        }
    }

	function SayHello2(string $name){
		echo "Hi $name, my name is $this->name \nAlamat : $this->addres \n";
	}
	function info(){
		echo "author 1 :" .self::AUTHOR."\n";
		echo "author 2 :".self::AUTHOR . "\n";
	}
	// selalu dijalankan di akhir untuk menghapus data
	function __destruct(){
		echo "Object persia $this->name is destroyed \n";
	}
}

/*
	funct ion __construct(string $name, ?string $address)
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
*/


 ?>

