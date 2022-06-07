<?php 
$type = ["E60","E71","M3" ];
$data = [
	"nama" => "adi",
	"jenkel" => "laki",
	"usia" => "20"
];

for ($i=0; $i < count($type); $i++) { 
	echo "Data ke $i =  $type[$i]" . PHP_EOL;
}

foreach ($type as $type) {
	echo "Data $type".PHP_EOL;
}

foreach ($data as $key => $value) {
	echo "$key : $value" . PHP_EOL;
}
 ?>