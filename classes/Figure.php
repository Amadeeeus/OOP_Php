<?php 
abstract class Figure
{
    abstract public function getSquare();
    abstract public function getPerimeter();
    
    public function getRatio()
    {
        return $this->getSquare()/$this->getPerimeter();
    }

    public function getSquarePerimeterSum()
    {
        return $this->getSquare()+$this->getPerimeter();
    }
}

?>