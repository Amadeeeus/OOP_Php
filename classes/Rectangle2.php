<?php 
require_once "./classes/iFigure.php";
require_once "./classes/iTetragon.php";
class Rectangle implements iFigure, iTetragon
{
  public function __construct(private $a, private $b)
  {
    
  }

  public function getA()
  {
    return $this->a;
  }
  public function getB()
  {
    return $this->b;
  }
  public function getC()
  {
    return $this->b;
  }
  public function getD()
  {
    return $this->a;
  }

  public function getSquare()
  {
    return $this->a*$this->b;
  }

  public function getPerimeter()
  {
    return 2*$this->a + 2*$this->b;
  }
}
?>