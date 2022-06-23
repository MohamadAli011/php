<?php 

namespace Data;

abstract class Location{
	public string $name;
	public string $lat;
	public string $long;

	function isi(string $nam, int $lat, int $long){

		$this->name = $nam;
		$this->lat = $lat;
		$this->long = $long;

	}
}

class City extends Location{

	function print(){
		echo "Kota";
	}

}
class Province extends Location{
	
}
class Country extends Location{
	
}

 ?>