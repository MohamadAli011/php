<?php 
require_once "data/data.php";

#membuat objek
$persia = new persia("Jill","Uganda");

#var_dump($persia);
#echo "$persia";


echo "nama : $persia->name \n";
#echo "alamat : $persia->addres \n";
echo "negara : $persia->countries \n";
$persia->info2();
/*
$persia->name = "Eko";
$persia->addres = "palopo";
$persia->contry = "India";
#var_dump($persia);

echo "Nama : $persia->name\n";
echo "Address : {$persia->addres}\n";
echo "Country : {$persia->contry}\n";

#####Function######
$persia->sayHello3("");
$persia->SayHello2("Jensen");
$persia->info();
*/
####this

 ?>