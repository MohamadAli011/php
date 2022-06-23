<?php 

require_once "data/shape.php";

use data\{Shape, Rectangle};

$shape = new Shape();

#echo $shape->getCorner() .PHP_EOL;

$rect =new Rectangle();

#echo $rect->getCorner() .PHP_EOL;
#echo $rect->getParentCorner() .PHP_EOL;
echo $rect->getParentR();

 ?>