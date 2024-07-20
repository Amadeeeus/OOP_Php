<?php 
require_once "./classes/iFigure3d.php";
class Cube implements iFigure3d
{
    private static $squareMultiply =6;
    public function __construct(private $side)
    {
        
    }

    public function getVolume()
    {
        return pow($this->side, 3);
    }

    public function getSurfaceSquare()
    {
        return self::$squareMultiply*pow($this->side,2);
    }
}
?>