<?php 

namespace Helper;

class Mathelper{

	static public string $name = "Mathelper";
	static public function sum(int...$numbers): int{
        $total = 0;
        foreach ($numbers as $number) {
            $total += $number;
        }
        return $total;
    }
 }