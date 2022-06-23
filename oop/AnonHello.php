<?php 
interface HelloWorld{
	function sayHello(): void;
}

$helloworld = new class implements HelloWorld{
	public function sayHello(): void{

	}
};

$helloworld->sayHello();

$heyJude = new class ("Jude"){
	public string $name;

	public function __construct(string $name){
		$this->name = $name;
	}
	public function HeyJ(){
		echo "Hey $this->name \n";
	}
};
$heyJude->HeyJ();
?>