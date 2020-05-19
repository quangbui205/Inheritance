<?php
include ("Circle.php");
include ("Cylinder.php");
$testCircle = new Circle(10,'blue');
$testCylinder = new Cylinder(5,"red",20);
$testCircle->toString();
$testCylinder->toString();
?>