<?php

class Circle
{
    public $radius;
    public $color;
    public function __construct($radius,$color)
    {
        $this ->radius=$radius;
        $this->color=$color;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
    public function calculateArea()
    {
        return pi()*pow($this->radius,2);
    }
    public function calculatePerimeter()
    {
        return pi()*$this->radius*2;
    }
    public function toString()
    {
        echo "Name: Circle, Color: ".$this->color.", Radius: ".$this->radius."<br>";
        echo "Area: ".$this->calculateArea()."<br>";
        echo "Perimeter: ".$this->calculatePerimeter()."<br>";
    }
}