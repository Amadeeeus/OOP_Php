<?php 
require_once "./classes/iSphere.php";
class Sphere implements iSphere
{
    const MOD =2;
 public function __construct(private $radius)
 {
    
 }

 public function getVolume()
 {
    return 4/3* iSphere::PI*pow($this->radius,3);
 }

 public function getSquare()
 {
    return self::MOD * iSphere::PI*pow($this->radius,2);
 }
}
?>