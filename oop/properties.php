<?php 
require_once "data/person.php";

#membuat objek
$persia = new persia();

$persia->name = "lucky";
$persia->address = "alabama";
$persia->countries = "USA";

echo "Nama : $persia->name\n";
echo "Countries : $persia->countries\n";

 ?>