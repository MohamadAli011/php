
<?php
#array 

$umur = array(20, 11, 29, 78);
$nama = array("jon", "alex", "marry", "richard");

#mengubah
$nama[0]="lex";

echo "ubah array nama di index 1 $nama[0]\n";

#menghapus isi d array sesuai dengan index
unset($umur[2]);

#menghitung jumlah data array
var_dump(count($umur));

#array map + array dalam array
$jb47 = [
	"NoRak" => "12",
	"NoSin" => "13",
	"alamat" => [
		"city" => "jkt",
		"contr" => "ind"
	]
];

var_dump($jb47);

echo "No Rangka $jb47[NoRak]\n";

#Mencetak nilai array dalam array
echo ($jb47["alamat"]["contr"]);
#var_dump($umur);
#var_dump($nama);
#echo "$umur[2]";