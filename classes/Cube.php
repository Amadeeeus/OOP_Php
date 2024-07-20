<?php 
require_once "./classes/iCube.php";
class Cube implements iCube
{
    private static $squareMultiply = 6;
    public function __construct(private $side)
    {
        
    }

    public function getVolume()
    {
        return pow($this->side, 3);
    }
    public function getSquare()
    {
        return self::$squareMultiply*pow($this->side,2);
    }
}
?>