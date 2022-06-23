<?php 

class Data implements IteratorAggregate{
	var string $first = "First";
	public string $second = "Second";
	private string $third = "Third";
	protected string $forth = "Forth";
}
$data = new Data();
foreach ($data as $key => $value) {
	echo "$property : $value \n";
}
 ?>