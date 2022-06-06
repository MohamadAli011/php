<?php 

$speed = 65;

switch ($speed) {
	case 50:
		echo "Cukup";
		break;
	case 60:
	case 65:
		echo "Oke";
		break;
	default:
		echo "Stop";
		break;
}


 ?>