<?php
include_once ('Shape.php');

class Circle extends Shape
{
    public $radius;
    public function __construct($name, $radius)
    {
        parent::__construct($name); /*kế thừa phương thức khởi tạo của lớp cha*/
        $this ->radius = $radius;
    }
    public function calculateArea()
    {
        return pi()* pow($this->radius,2);
    }
    public function calculatePerimeter()
    {
        return pi()* $this->radius *2;
    }
}