<?php 

$speed = 100;
$stop = 2;

if ($speed >= 100 && $stop < 1) {
	echo "CEPAT";
}else if ($speed >= 100 && $stop < 2) {
	echo "cepat";
}else if ($speed >= 100 && $stop < 3) {
	echo "sedang";
}

#mempersimpel if dan mengisi nilai variable
$gender = "pria";

$hi = $gender == "pria" ? "Hi Bro":"Hi Nona";
echo $hi . PHP_EOL;

 ?>