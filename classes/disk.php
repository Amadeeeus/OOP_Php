<?php 
require_once "./classes/FigureInt.php";
class Disk implements Figure
{
 private static $pi=3.14;
 public function __construct(private $r)
 {
    
 }

 public function getSquare()
 {
   return self::$pi*pow($this->r, 2);
 }

 public function getPerimeter()
 {
     return 2*self::$pi*$this->r;
 }
}
?>