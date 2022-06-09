<?php 
$vglobal = "halo global"; //Variable global scope

function test(){
	global $vglobal; //Variable global keyword guna untuk mengkases variable global
	$vlocal = "halo local"; //Variable local scope
}

function incre(){
	static $tot = 1; //Variable static agar nilai variable dapat tersimpan
	echo "nilai $tot ditambah 1\n";
	$tot++;
}

incre();
incre();

 ?>