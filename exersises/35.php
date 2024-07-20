<h1>Интерфейсы в ООП</h1><br><br>
<span>Исходный код</span><br>
<pre>
interface Figure
{
    public function getSquare();
    public function getPerimeter();
    

}

require_once "./classes/FigureInt.php";
class Quadrate implements Figure
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
</pre><br>
<?php 
require_once "./classes/quadrate2.php";
require_once "./classes/disk.php";
$qua = new Quadrate(5);
echo "Периметр".$qua->getPerimeter()."<br>";
echo "Площадь".$qua->getSquare()."<br>";


//echo "Имя= ".$stud->getName()."\n"."Возраст= ".$stud->getAge()."\n"."Курс= ".$stud->getCourse()."\n";
?>
<br><h1>Практика</h1><br><br>
Сделайте класс Disk (круг), реализующий интерфейс Figure.
<span>Исходный код</span><br>
<pre>
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

$disc = new Disk(40);
echo "Периметр".$disc->getPerimeter()."<br>";
echo "Площадь".$disc->getSquare()."<br>";
</pre><br>
<?php 
$disc = new Disk(40);
echo "Периметр".$disc->getPerimeter()."<br>";
echo "Площадь".$disc->getSquare()."<br>";
?>