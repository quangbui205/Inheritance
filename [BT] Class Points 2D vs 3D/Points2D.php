<?php

class Points2D
{
    public $numX;
    public $numY;
    public $arrayFloat =[];
    public function __construct($numX,$numY)
    {
        $this->numX = $numX;
        $this->numY = $numY;
    }

    /**
     * @return mixed
     */
    public function getNumX()
    {
        return $this->numX;
    }

    /**
     * @param mixed $numX
     */
    public function setNumX($numX)
    {
        $this->numX = $numX;
    }

    /**
     * @return mixed
     */
    public function getNumY()
    {
        return $this->numY;
    }

    /**
     * @param mixed $numY
     */
    public function setNumY($numY)
    {
        $this->numY = $numY;
    }
    public function setXY($numX,$numY)
    {
        $this->numX = $numX;
        $this->numY=$numY;
    }
    public function toString()
    {
        return "($this->numX , $this->numY)";
    }
}