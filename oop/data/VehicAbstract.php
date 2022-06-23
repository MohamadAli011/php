<?php 
namespace Data;

abstract class Vehic{
	public string $name;
	public int $CC;
	public int $tahun;

	abstract public function run(): void;
}

class Jeep extends Vehic{
	public function run(): void{
		echo "Jeep $this->name is start \n";
		echo "CC is $this->CC \n";
		echo "Year is $this->tahun \n";

	}
}

class Truck extends Vehic{
	public function run(): void{
		echo "Truck $this->name is start \n";
		echo "CC is $this->CC \n";
		echo "Year is $this->tahun \n";

	}
}

 ?>