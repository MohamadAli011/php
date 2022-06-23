<?php 

/**
 * 
 */
class Student{

	public string $id;
	public string $name;
	public int $age;
	public string $sample;

	function setSample(string $sample){
		$this->sample = $sample;
		echo "sample : $this->sample\n";
		echo "Id : $this->id\n";
	}
	 public function __toString()
    {
        return "Student id: $this->id, name: $this->name, Age: $this->age";
    }
	
}

 ?>