<?php


class Shape
{
    public $name;
    public function __construct($name)
    {
        $this ->name =$name;
    }
    public function show()
    {
        return "I am a Shape. My name is $this->name";
    }
}
?>