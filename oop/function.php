<?php 
require_once "data/person.php";

#membuat objek
$persia = new persia();

$persia->name = "lucky";
$persia->address = "alabama";

#memanggil function di class laen
#$persia->name = "loka";
$persia->f1(null);



 ?>