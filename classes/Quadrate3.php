<?php 
require_once "./classes/iFigure.php";
require_once "./classes/iTetragon.php";
class Quadrade implements iFigure,iTetragon
{
    public function __construct(private $a)
    {
        
    }

    public function getA()
    {
        return $this->a;
    }
    public function getB()
    {
        return $this->a;
    }

    public function getC()
    {
        return $this->a;
    }

    public function getD()
    {
        return $this->a;
    }

    public function getSquare()
    {
        return $this->a*$this->a;
    }

    public function getPerimeter()
    {
        return 4*$this->a;
    }
}
?>