<?php 

require_once "data/Person.php";

define("APPLICATION", "Belajar PHP OOP");
const APP_VERSION = "1.0.0";

echo APPLICATION . PHP_EOL;
echo APP_VERSION . PHP_EOL;

echo persia::AUTHOR . PHP_EOL;

$joko = new persia();
echo "ini cetak constant langsung lewat function ";
$joko->info();
 ?>