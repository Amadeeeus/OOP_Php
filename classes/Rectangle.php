<?php 
require_once "./classes/iFigure.php";
class Rectangle implements iFigure
{
  public function __construct(private $a, private $b)
  {
    
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