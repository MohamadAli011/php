<?php 

namespace Data;

class Shape{
	
	public function getCorner(){
		return 7;
	}
	public function getready(){
		return "lalalal";
	}
}

class Rectangle extends Shape{
	
	public function getCorner(){
		return 4;
	}
	public function getParentCorner(){
		return parent::getCorner();
	}
		public function getParentR(){
		return parent::getready();
	}

}



 ?>