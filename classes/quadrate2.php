<?php 
require_once "./classes/FigureInt.php";
class Quadrate implements Figure
{
    public function __construct(private $a)
    {
        
    }

    public function getSquare()
    {
        return $this->a*$this->a;
    }
    public function getPerimeter() 
    {
        return $this->a*4;
    }
}
?>