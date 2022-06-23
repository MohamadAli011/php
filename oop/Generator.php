<?php 
function getGenap(int $max): Iterator{
	$array = [];
	for ($i=1; $i <= $max ; $i++) { 
		if ($i % 2 == 0) {
			$array[] = $i;
		}
	}
	return new ArrayIterator($array);
}

foreach (getGenap(19) as $value) {
	echo "Genap : $value\n";
}

function getGanjil(int $max): Iterator{
	for ($i=1; $i <= $max ; $i++) { 
		if ($i % 2 == 1) {
			yield $i;
		}
	}
}

foreach (getGanjil(19) as $value) {
	echo "Gankil : $value\n";
}
 ?>