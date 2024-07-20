<h1>Константы в интерфейсе</h1><br><br>
<span>Исходный код</span><br>
<pre>
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
interface iSphere
{
    public const PI = 3.14;
    public function __construct($radius);
    public function getVolume();
    public function getSquare();
} 


$sp = new Sphere(6);
</pre><br>
<?php 
require_once "./classes/Sphere.php";
$sp = new Sphere(6);
echo "Обьем= ".$sp ->getVolume()."\n"."Площадь= ".$sp ->getSquare();
?>