<?php
include_once ("Points2D.php");
include_once ("Points3D.php");
$testPoints2 = new Points2D($numX= 10, $numY = 15);
$testPoints2->setNumX(12.1608);
$testPoints2->setNumY(15.999);
echo $testPoints2->toString()."<br>";
$testPoints2->setXY(12,20);
echo $testPoints2->toString()."<br>";
$testPoints3 = new Points3D($numX = 4, $numY=5.05, $numZ = 10.08);
$testPoints3 ->setNumX(12.25);
$testPoints3 ->setNumY(6.6666);
$testPoints3->setNumZ(5.325);
echo $testPoints3 ->toString()."<br>";
$testPoints3->setXYZ(10,100,1000);
echo $testPoints3 ->toString()."<br>";
?>
