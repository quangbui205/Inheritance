<?php
include_once ("Points2D.php");

class Points3D extends Points2D
{
    public $numZ;
    public function __construct($numX, $numY,$numZ)
    {
        parent::__construct($numX, $numY);
        $this->numZ = $numZ;
    }

    /**
     * @return mixed
     */
    public function getNumZ()
    {
        return $this->numZ;
    }

    /**
     * @param mixed $numZ
     */
    public function setNumZ($numZ)
    {
        $this->numZ = $numZ;
    }
    public function setXYZ($numX,$numY,$numZ)
    {
        parent::setXY($numX,$numY);
        $this->numZ= $numZ;
    }
    public function toString()
    {
        return "($this->numX , $this->numY , $this->numZ)";
    }
}