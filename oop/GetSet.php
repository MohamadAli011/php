<?php 

require_once "data/category.php";

$category = new Category();
$category->setName("fgfd");
$category->setExpensive(false);

echo "Name : {$category->getName()} \n";
echo "Expensive : {$category->isExpensive()} \n";

 ?>