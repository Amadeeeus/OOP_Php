<?php
require_once "./classes/iFigure.php"; 
class Quadrate implements iFigure
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