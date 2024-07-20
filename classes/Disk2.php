<?php 
require_once "./classes/iFigure.php";
require_once "./classes/iCircle.php";
class Disk implements iFigure,iCircle
{
    private static $mod = 4;
    const PI = 3.14;
    const MOD = 2;
public function __construct(private $rad)
{
    
}

public function getSquare()
{
   return self::MOD * self::PI*pow($this->rad,2);
}

public function getPerimeter()
{
    return self::MOD * self::PI* $this->rad;
}

public function getRadius()
{
    return $this->rad;
}

public function getDameter()
{
    return $this->rad*self::MOD;
}
}

?>