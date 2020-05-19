<?php
include_once ("Circle.php");

class Cylinder extends Circle
{
    public $height;
    public function __construct($radius, $color,$height)
    {
        $this->height =$height;
        parent::__construct($radius, $color);
    }
    public function calculateVolume()
    {
        return parent::calculateArea()*$this->height;
    }
    public function toString()
    {
        echo "Name: Cylinder, Color: ".$this->color.", Radius: ".$this->radius.", Height: ".$this->height."<br>";
        echo "Volume: ".$this->calculateVolume();
    }
}