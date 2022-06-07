<?php 
#perulangan while
#perulangan ke atas/tambah
$angka = 512;
while ($angka <= 10) { 
  echo "Ditambah: ".$angka. PHP_EOL;
  $angka++;
  # code...
  }

#perulangan do while
#perulangan ke atas/tambah
$angka2 = 13;
do { 
  echo "Ditambah: ".$angka2. PHP_EOL;
  $angka2++;
  # code...
 } while ($angka2 <= 10);

#break & continue
 for ($i=0; $i < 10; $i++) { 
 	if ($i % 2 == 0) {
		continue;
	}
	echo "Counter : $i". PHP_EOL;
}


   ?>